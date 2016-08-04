@extends("layouts.app")

@section("content")
    <div class="uploads">
        <div class="container">
            <form data-widget="upload" action="" method="post" enctype="multipart/form-data">
                <label class="btn btn-danger">
                    Upload file...
                    <input class="hidden" type="file" name="file">
                </label>
            </form>
        </div>
    </div>
@endsection