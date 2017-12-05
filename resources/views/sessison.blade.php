@if(Session::has('thongbao'))
                        <div class="alert alert-{!!session::get('canhbao')!!}">
                            {!!session::get('thongbao')!!}
                        </div>
            @endif