<?php

namespace App\Http\Livewire;

use App\Models\AboutUs;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCreateAboutUsComponent extends Component
{
    use WithFileUploads;
    public $aboutUs;
    public $heading;
    public $subHeading1;
    public $text1;
    public $image1;
    public $subHeading2;
    public $text2;
    public $image2;
    public $subHeading3;
    public $text3;
    public $image3;
    public $subHeading4;
    public $text4;
    public $image4;
    public $heading3;
    public $heading1;
    public $subText;
    public $error;

    public function updated($field)
    {
        $this->resetValidation();
    }

    public function mount()
    {
        $this->aboutUs = AboutUs::first();
        $this->heading = $this->aboutUs?->heading;
        $this->subHeading1 = $this->aboutUs?->sub_heading_1;
        $this->text1 = $this->aboutUs?->text_1;
        $this->subHeading2 = $this->aboutUs?->sub_heading_2;
        $this->text2 = $this->aboutUs?->text_2;
        $this->subHeading3 = $this->aboutUs?->sub_heading_3;
        $this->text3 = $this->aboutUs?->text_3;
        $this->subHeading4 = $this->aboutUs?->sub_heading_4;
        $this->text4 = $this->aboutUs?->text_4;
        $this->heading1 = $this->aboutUs?->heading_1;
        $this->subText = $this->aboutUs?->sub_text;
    }

    public function render()
    {
        return view('livewire.edit-create-about-us-component');
    }

    public function save()
    {   
        if(\Auth::user()->hasRole('edit-about-us') || \Auth::user()->hasRole('add-about-us'))
        { 
                    
            if(!is_null($this->image1))
            {
                $first_image = 'bg-'.time().'.'.$this->image1->extension(); 
                $first_image_path = $this->image1->storeAs('public/uploads/about-us',$first_image);
            }
            
            if(!is_null($this->image2))
            {
                $second_image = 'bg-'.time().'.'.$this->image2->extension(); 
                $second_image_path = $this->image2->storeAs('public/uploads/about-us',$second_image);
            }
            
            if(!is_null($this->image3))
            {
                $third_image = 'bg-'.time().'.'.$this->image3->extension(); 
                $third_image_path = $this->image3->storeAs('public/uploads/about-us',$third_image);
            }
            
            if(!is_null($this->image4))
            {
                $fourth_image = 'bg-'.time().'.'.$this->image4->extension(); 
                $fourth_image_path = $this->image4->storeAs('public/uploads/about-us',$fourth_image);
            }
            
          

            $data = [
                'heading' => $this->heading,
                'heading_1' => $this->heading1,
                'sub_text' => $this->subText,
                'sub_heading_1' => $this->subHeading1,
                'text_1' => $this->text1,
                'image_1' => !is_null($this->image1) ? str_replace("public/","",$first_image_path) : $this->aboutUs->image_1,
                'sub_heading_2' => $this->subHeading2,
                'text_2' => $this->text2,
                'image_2' => !is_null($this->image2) ? str_replace("public/","",$second_image_path) : $this->aboutUs->image_2,
                'sub_heading_3' => $this->subHeading3,
                'text_3' => $this->text3,
                'image_3' => !is_null($this->image3) ? str_replace("public/","",$third_image_path) : $this->aboutUs->image_3,
                'sub_heading_4' => $this->subHeading4,
                'text_4' => $this->text4,
                'image_4' => !is_null($this->image4) ? str_replace("public/","",$fourth_image_path) : $this->aboutUs->image_4,

  
            ];

            if(is_null($this->aboutUs)) AboutUs::create($data);
            else $this->aboutUs->update($data);


            return redirect()->route('about-us')->with('success','About us updated');
        }
        return back();
    }

   public function removeImage($imageIndex)
   {
     if($imageIndex == "image1") $this->image1 = null;
     elseif($imageIndex == "image2") $this->image2 = null;
     elseif($imageIndex == "image3") $this->image3 = null;
     else $this->image4 = null;
   }

   public function removeImageFromDB($imageIndex)
   {
    
    if($imageIndex == "image1") $this->aboutUs->update(["image_1" => null]);
    elseif($imageIndex == "image2") $this->aboutUs->update(["image_2" => null]);
    elseif($imageIndex == "image3") $this->aboutUs->update(["image_3" => null]);
    else $this->aboutUs->update(["image_4" => null]);
   }
}
