

<form action="{{url('/admin/'.$usuarios->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('admin.form-usuarios')

</form>