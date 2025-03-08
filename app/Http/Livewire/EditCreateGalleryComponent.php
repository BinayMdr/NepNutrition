<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCreateGalleryComponent extends Component
{
    use WithFileUploads;

    public $photos = []; 
    public $captions = [];
    public $storedPhotos = []; 
    public $gallery = null;
    public $storedCaptions = [];

    public function mount($gallery)
    {
        $this->gallery = $gallery;
        $this->storedPhotos = Gallery::orderBy('id','desc')->get(); 

        foreach ($this->storedPhotos as $photo) {
            $this->storedCaptions[$photo->id] = $photo->caption;
        }
    }

    public function updatedPhotos()
    {
        $this->validate([
            'photos.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048', // Allows all image types, max size 2MB
        ]);
    }

    public function removePhoto($index)
    {
        if (isset($this->photos[$index])) {
            unset($this->photos[$index]);
            unset($this->captions[$index]);
        }
        $this->photos = array_values($this->photos);
        $this->captions = array_values($this->captions);
    }

    public function removeStoredPhoto($id)
    {
        $storedGallery = Gallery::find($id);
        if ($storedGallery && \Storage::disk('public')->exists($storedGallery->image)) {
            \Storage::disk('public')->delete($storedGallery->image);
            $storedGallery->delete();
            $this->storedPhotos = Gallery::all();
        }

        $this->emit('refreshComponent');
    }

    public function update()
    {
        foreach ($this->photos as $index => $photo) {
            $image = 'gallery-' . round(microtime(true) * 1000) . '.' . $photo->extension(); 
            $image_path = $photo->storeAs('public/uploads/gallery', $image);
            
            Gallery::create([
                'image' => str_replace("public/", "", $image_path),
                'caption' => $this->captions[$index] ?? null,
            ]);
        }

        return redirect()->route('gallery')->with('success', $this->gallery ? "Gallery Updated" : "Gallery Added");
    }

    public function render()
    {
        return view('livewire.edit-create-gallery-component');
    }

    public function updateCaption($id)
    {
        $photo = Gallery::find($id);
        if ($photo) {
            $photo->caption = $this->storedCaptions[$id];
            $photo->save();
            
            $this->emit('refreshComponent');
        }
}
}
