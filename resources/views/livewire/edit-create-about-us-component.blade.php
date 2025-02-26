<div class="container-fluid px-2 px-md-4">
    <div class="card card-body mx-3">
      <div class="row">
        <div class="row">
          <div class="col-12">
            <div class="card card-plain h-100">
              <div class="card-header pb-0 p-3">
                <h6 class="mb-0">@if(!is_null($aboutUs)) Update AboutUs @else Add AboutUs @endif </h6>
              </div>
              <div class="card-body">
                @error('heading1')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @error('heading2')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @error('heading3')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @error('text1')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @error('text2')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @error('text3')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @error('topBanner')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @error('showLowerBanner')
                  @include('partials.error_alert', ['message' => $message])
                @enderror
                @if(\Session::has('success'))
                  <div class="alert alert-success alert-dismissible text-white" role="alert">
                    <span class="text-sm">{{\Session::get('success')}}</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                <form class="text-start" wire:submit.prevent="save" >  
                

                  <div class="row mb-6">
                    <div class="col-4">
                      <label class="form-label">Heading</label>
                      <div class="input-group input-group-outline">
                        <input type="text" class="form-control" name="heading" wire:model.lazy="heading" autocomplete="off">
                      </div>
                    </div>
                    <div class="col-4">
                      <label class="form-label">Heading One</label>
                      <div class="input-group input-group-outline">
                        <input type="text" class="form-control" name="heading1" wire:model.lazy="heading1" autocomplete="off">
                      </div>
                    </div>
                    <div class="col-4">
                      <label class="form-label">Sub Text</label>
                      <div class="input-group input-group-outline">
                        <textarea type="text" class="form-control" style="resize:none" name="subText" wire:model.lazy="subText" autocomplete="off" rows="3">{{$subText}}</textarea>
                      </div>
                    </div>
                  </div>



                  <div class="row mb-6">
                   <div class="col-4"> 
                    <div class="my-4" style="width: 100%; height: 100%; overflow: hidden; position:relative">
                      @if($image1)
                        <img src="{{ $image1->temporaryUrl() }}" width="50%" height="50%">
                        <button type="button" wire:click="removeImage('image1')" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                          </svg>
                        </button>
                      @elseif(!is_null($aboutUs) && !is_null($aboutUs->image_1))
                          <img src="{{ env('APP_URL').'storage/'.$aboutUs->image_1 }}" width="50%" height="50%">
                          <button type="button" wire:click="removeImageFromDB('image1')" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                              <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                            </svg>
                          </button>
                      
                      
                      @endif
                        <div class="mt-2">
                        <label class="form-label">Image One</label>
                        <input type="file" class="form-control" name="image1" wire:model.lazy="image1" accept=".svg, image/svg+xml">
                       
                        </div>
                    </div>
                    </div>

                  <div class="col-4">
                    <label class="form-label">Sub Heading One</label>
                    <div class="input-group input-group-outline">
                      <input type="text" class="form-control" name="sub_heading_1" wire:model.lazy="subHeading1" autocomplete="off">
                    </div>
                  </div>
                    <div class="col-4">
                      <label class="form-label">Text One</label>
                      <div class="input-group input-group-outline">
                        <textarea type="text" class="form-control" style="resize:none" name="text_1" wire:model.lazy="text1" autocomplete="off" rows="3">{{$text1}}</textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-6">
                    <div class="col-4"> 
                     <div class="my-4" style="width: 100%; height: 100%; overflow: hidden; position:relative">
                      
                      @if ($image2)
                         <img src="{{ $image2->temporaryUrl() }}" width="50%" height="50%">
                         <button type="button" wire:click="removeImage" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                             <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                           </svg>
                         </button>
                      
                      @elseif(!is_null($aboutUs) && !is_null($aboutUs->image_2))
                      <img src="{{ env('APP_URL').'storage/'.$aboutUs->image_2 }}" width="50%" height="50%">
                      <button type="button" wire:click="removeImageFromDB('image2')" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                          <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                        </svg>
                      </button>
                       
                       @endif
                         
                       <div class="mt-2">
                         <label class="form-label">Image Two</label>
                         <input type="file" class="form-control" name="image2" wire:model.lazy="image2" accept=".svg, image/svg+xml">
                       </div> 
 
                     </div>
                     </div>
 
                   <div class="col-4">
                     <label class="form-label">Sub Heading Two</label>
                     <div class="input-group input-group-outline">
                       <input type="text" class="form-control" name="sub_heading_2" wire:model.lazy="subHeading2" autocomplete="off">
                     </div>
                   </div>
                     <div class="col-4">
                       <label class="form-label">Text Two</label>
                       <div class="input-group input-group-outline">
                         <textarea type="text" class="form-control" style="resize:none" name="text_2" wire:model.lazy="text2" autocomplete="off" rows="3">{{$text2}}</textarea>
                       </div>
                     </div>
                   </div>

                   <div class="row mb-6">
                    <div class="col-4"> 
                     <div class="my-4" style="width: 100%; height: 100%; overflow: hidden; position:relative">
                         
                      @if ($image3)
                         <img src="{{ $image3->temporaryUrl() }}" width="50%" height="50%">
                         <button type="button" wire:click="removeImage" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                             <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                           </svg>
                         </button>
                      @elseif(!is_null($aboutUs) && !is_null($aboutUs->image_3))
                           <img src="{{ env('APP_URL').'storage/'.$aboutUs->image_3 }}" width="50%" height="50%">
                           <button type="button" wire:click="removeImageFromDB('image3')" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                               <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                             </svg>
                           </button>
                       
                       @endif
                         
                       <div class="mt-2">
                         <label class="form-label">Image Three</label>
                         <input type="file" class="form-control" name="image3" wire:model.lazy="image3" accept=".svg, image/svg+xml">
                       </div> 
 
                     </div>
                     </div>
 
                   <div class="col-4">
                     <label class="form-label">Sub Heading Three</label>
                     <div class="input-group input-group-outline">
                       <input type="text" class="form-control" name="sub_heading_3" wire:model.lazy="subHeading3" autocomplete="off">
                     </div>
                   </div>
                     <div class="col-4">
                       <label class="form-label">Text Three</label>
                       <div class="input-group input-group-outline">
                         <textarea type="text" class="form-control" style="resize:none" name="text_3" wire:model.lazy="text3" autocomplete="off" rows="3">{{$text2}}</textarea>
                       </div>
                     </div>
                   </div>


                   <div class="row mb-2">
                    <div class="col-4"> 
                     <div class="my-4" style="width: 100%; height: 100%; overflow: hidden; position:relative">
                         
                      @if ($image4)
                         <img src="{{ $image4->temporaryUrl() }}" width="50%" height="50%">
                         <button type="button" wire:click="removeImage" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                             <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                           </svg>
                         </button>
                      @elseif(!is_null($aboutUs) && !is_null($aboutUs->image_4))
                      <img src="{{ env('APP_URL').'storage/'.$aboutUs->image_4 }}" width="50%" height="50%">
                      <button type="button" wire:click="removeImageFromDB('image4')" style="position: absolute; top: -10px; right: 120px; background: none; border: none; outline: none; cursor: pointer; font-weight: bold;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                          <path d="M10.354 4.354a.5.5 0 1 1 .708.708L8.707 8l2.354 2.354a.5.5 0 0 1-.708.708L8 8.707l-2.354 2.354a.5.5 0 1 1-.708-.708L7.293 8 4.939 5.646a.5.5 0 0 1 .708-.708L8 7.293l2.354-2.354a.5.5 0 0 1 .708 0z"/>
                        </svg>
                      </button>
                       
                     
                       @endif
                         
                       <div class="mt-2">
                         <label class="form-label">Image Four</label>
                         <input type="file" class="form-control" name="image4" wire:model.lazy="image4" accept=".svg, image/svg+xml">
                       </div> 
 
                     </div>
                     </div>
 
                   <div class="col-4">
                     <label class="form-label">Sub Heading Four</label>
                     <div class="input-group input-group-outline">
                       <input type="text" class="form-control" name="sub_heading_4" wire:model.lazy="subHeading4" autocomplete="off">
                     </div>
                   </div>
                     <div class="col-4">
                       <label class="form-label">Text Four</label>
                       <div class="input-group input-group-outline">
                         <textarea type="text" class="form-control" style="resize:none" name="text_4" wire:model.lazy="text4" autocomplete="off" rows="3">{{$text4}}</textarea>
                       </div>
                     </div>
                   </div>



                  
                  @if(\Auth::user()->hasRole('add-about-us') || \Auth::user()->hasRole('edit-about-us') )
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">@if(!is_null($aboutUs)) Update @else Add @endif About Us</button>
                  </div>
                  @endif
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('layout.footer')
    
  </div>

