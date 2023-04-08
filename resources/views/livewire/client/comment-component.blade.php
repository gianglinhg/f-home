<div>
    <div class="product_review">
        <h3>Reviews ({{$product->comments->count()}})</h3>
        @foreach($comments as $comment)
        <div class="commant-text row">
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="profile">
                    <img class="img-responsive" src="{{asset('asset/images/'. $comment->user->avatar)}}" alt="#">
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8">
                <h5>{{$comment->user->name}}</h5>
                <p><span class="c_date">{{$comment->created_at}}</span> | <span><a rel="nofollow"
                            class="comment-reply-link" href="#">Trả
                            lời</a></span></p>
                <span class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>
                <p class="msg">{{$comment->message}}</p>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-sm-12">
                <div class="full review_bt_section">
                    <div class="float-right">
                        @if(auth()->check())
                        <a class="bt_main" data-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">Tạo bình luận</a>
                        @else
                        <p class="bt_main"><a href="{{route('login')}}" style="color:white;">Đăng nhập</a> để tham gia
                            bình luận</p>
                        @endif
                    </div>
                </div>
                <div class="full">
                    <div id="collapseExample" class="full collapse commant_box">
                        <form wire:submit.prevent='storeComment' method="post">
                            @csrf
                            <input id="ratings-hidden" name="rating" type="hidden">
                            <textarea class="form-control animated" cols="50" id="new-review" name="comment"
                                placeholder="Nhập nội dung tại đây" required="" wire:model.defer="comment"></textarea>
                            <div class="full_bt center">
                                <button class="bt_main" type="submit">Đăng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('storeComment', msg => {
                alert(msg);
                let test = @js($comment);
                console.log(test);
            })
        })
    </script>
    @endpush
</div>