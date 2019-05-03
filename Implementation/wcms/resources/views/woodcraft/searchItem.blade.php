@if($item->count())
        @foreach($item as $items)

         <form action="{!! url('/orderprocess', $items->itemid) !!}" class="col-md-4">
            <div class="card col-12 col-md-6 col-lg-3 mb-5">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="/{{ $items->item_image }}" alt="" title="" style="width: 210px;height: 270px;">
                    </div>
                    <div class="card-box" style="width: 210px;">
                        <h4 class="card-title mbr-fonts-style">{{ $items->item_name }}</h4>
                        
                        <!--Btn-->
                        <div class="mbr-section-btn align-left mb-1">
                            <input type="submit" style="font-size: 20px; height: 75px; width: 150px;" class="btn btn-secondary-outline display-7 p-0" value="रू {{ $items->price }}.00">
                        </div>
                    </div>
                </div>
            </div>
        </form>
            @endforeach
        @else

            <h2 colspan="4"> No record found</h2>12

        @endif