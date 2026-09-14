@extends('layouts.horizontal', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="row">
        <div class="col-xl-12">
            <!-- Todo-->
            <div class="card">
                <a class="btn btn-dark" style="width: 200px; margin: 15px" href="{{route('blog.create')}}">Create new blog</a>
                <div class="searchUser">
                    {{--            <div class="searchText">Search for a user</div>--}}
                    <form action="{{route('blog.search')}}" style="display: flex; column-gap: 20px">
                        <input type="text" name="title" placeholder="Search the users here" required>
                        <button type="submit" class="searchButton">Search</button>
                    </form>
                </div>
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="card-widgets">
                            <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                            <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                               aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                                    class="ri-subtract-line"></i></a>
                            <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                        </div>
                        <h5 class="header-title mb-0">Projects</h5>
                    </div>

                    <div id="yearly-sales-collapse" class="collapse show">

                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Action Buttons</th>
                                    <th>Blog Id</th>
                                    <th>Blog Title</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr style="color: black">
                                        <td style="display: flex; column-gap: 15px">
                                            <form action="{{route('blog.delete', $blog->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="removeButton">
                                                    <img src="{{asset('images/icons/bin.png')}}" alt="">
                                                </button>
                                            </form>
                                            <a href="{{route('blog.edit', $blog->id)}}" class="editLink"><img src="{{asset('images/icons/edit.png')}}" alt=""></a>
                                            <a href="{{route('blog.info', $blog->id)}}" class="editLink"><img src="{{asset('images/icons/info.png')}}" alt=""></a>
                                        </td>
                                        <td>{{$blog->id}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    {{ $blogs->links('paginator') }}
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
