
@extends('dashboard.game_ui')

@section("title") Game & Software Zone Myanmar @endsection

@section('content')
    <div class="container py-4">
        <div class="col-12 p-0 d-flex flex-wrap align-items-center">
            <div class="col-12 d-flex flex-wrap justify-content-around align-items-center" style="height: 50vh">
                <form class="text-white w-100" action="{{ route('game.gameSearch') }}" method="get" enctype="multipart/form-data">
                    @csrf
                    <h1 class="col-12 text-center mb-5 shadow-lg" style="font-size: 44px; line-height: 44px">Warmly Welcome</h1>
                    <div class="form-row align-items-end justify-content-center">
                        <div class="form-group col-md-5">
                            <label for="name" class="h5 mb-3">Search Game</label>
                            <input required type="text" class="form-control rounded-0 @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}" placeholder="Enter Game Name">
                        </div>
                        <div class="form-group col-md-2 text-left">
                            <button type="submit" class="btn rounded-0  btn-primary px-3 pb-2"> Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <h1 class="col-12 my-5 pb-4 pt-3 text-center text-white border border-dark" style="background: rgba(11,15,18,0.6); ">{{ $title }}</h1>
            @if(count($games))
            @foreach($games as $post)
                <div class="col-6 px-sm-2 px-md-3 px-lg-3 col-md-3 col-lg-2 my-3">
                    <div class="card game_card rounded-0"  style="cursor: pointer;">
                        <img class="card-img-top" src="{{ asset("/storage/logo/".$post->logo) }}" alt="Card image cap" onclick="location.href='{{route('game.singleGameList',$post->id)}}'" style="width: 100%; height: 125px; padding: 13px;">
                        <div class="card-body pt-1 pb-2" onclick="location.href='{{route('game.singleGameList',$post->id)}}'" style="padding: 13px">
                            <span class="card-title w-100" style="font-size: 14px;">{{\App\Custom::toShort($post->name,15) }}</span>
                            <p class="card-text text-muted " style="font-size: 12px;">{{\App\Custom::toShort($post->developer,15) }}</p>
                        </div>
                        <div class="card-footer px-0 text-center">
                            <h6 class="text-center m-0 p-0 " style="font-size: 12px"><i class="feather-eye"></i> {{ \App\Viewer::where('post_id',$post->id)->count() * 3 }}</h6>
                            <small class="text-muted" style="font-size: 11px"> Version {{ $post->version }} </small>
                            <div class="star " data-toggle="modal" data-target="#exampleModal{{ $post->id }}">
                                @for($i=1; $i<=5; $i++)
                                    @if($i<=floor(collect($post->getRating->pluck('rating'))->avg()) )
                                        <i class="fas fa-star fa-fw"></i>
                                    @else
                                        <i class="far fa-star fa-fw"></i>
                                    @endif
                                @endfor
                            </div>


                            {{--                                Rating Modal start                            --}}
                            <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModal{{ $post->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content" style="background-color: #a81d1d !important;">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white" id="exampleModal{{ $post->id }}Label">{{ $post->name }} ကိုသင်ဘယ်လောက်ထိကြိုက်နှစ်သက်လဲ</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('addRating.storeRating') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group my-3">
                                                    <div class="rating">
                                                        <label>
                                                            <input type="radio" name="rating" value="1" />
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="2" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="3" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="4" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="5" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                    </div>
                                                    @error('rating')
                                                    <small class="invalid-feedback font-weight-bold" role="alert">
                                                        {{ $message }}
                                                    </small>
                                                    @enderror
                                                    <input type="hidden" value="{{$post->id}}" name="post_id">
                                                </div>
                                                <input type="hidden" value="{{$post->id}}" name="wedding_package_id">
                                                <button type="submit" class="btn px-3 py-2 text-white " style="background-color: #080c0d;"><i class="fas fa-plus-square mr-1"></i> Rating </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                                Rating Modal end                            --}}




                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-12 d-flex justify-content-start">

                {!! $games->links() !!}
            </div>
            @else
            <div class="col-12 my-5 text-center px-0 py-3 text-dark" style="background: whitesmoke;">
                <p class="px-lg-5" style="line-height: 6vw; font-size: 4vw" >!! Opp There is nothing game here.... <a href="{{route('game.gameList')}}" class="badge px-4 badge-pill badge-primary">Back</a></p>
                <hr/>
                <img src="{{asset('dashboard/images/nothing.png')}}" class="w-100 p-3" alt="">
            </div>
            @endif
        </div>
    </div>



@endsection




