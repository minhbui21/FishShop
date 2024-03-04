@extends("layout")
@section("content")
    <main>
        <div class="ms-auto me-auto mt-5" style="width:500px">
                @if($errors ->any())
                    <div class="col-12">
                        @foreach($errors ->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                    </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{$error}}</div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success">{{$success}}</div>
        @endif

                </div>

    <p> Chúng tôi sẽ gửi một đường dẫn đến email của bạn, sử dụng đường dẫn đó để đặt lại mật khẩu</p>
    <form action="{{route('forget.password.post')}}" method="POST" > 
        @csrf
        <div class="mb-3">
            <lable class="form-lable"> Địa chỉ email</lable>
            <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-primary"> Gửi đường dẫn </button>
    </form>
</div>
    </main>
    @endsection
