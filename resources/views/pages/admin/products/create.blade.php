@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Add Product</div>
        <div class="formEdit" style="padding-bottom: 50px">
            <form action="{{route('admin.add.product')}}" method="POST" class="registerEmployeeForm" enctype="multipart/form-data">
                @csrf
                <label class="formLabel" for="course_name">Product Name</label>
                <input class="formInputProfile" type="text" id="product_name" name="product_name" value="">
                <label class="formLabel" for="course_name">Image</label>
                <input type="file" name="image" value="">
                <label class="formLabel" for="course_name">Duration Training</label>
                <input class="formInputProfile" type="text" id="" name="duration" value="">
                <label class="formLabel" for="course_name">Validity</label>
                <input class="formInputProfile" type="text" id="" name="validity" value="">
                <label class="formLabel" for="course_name">Price</label>
                <input class="formInputProfile" type="text" id="" name="price" value="">
                <label class="formLabel" for="course_name">Trainer</label>
                <select name="trainer" id="">
                    <option value="">No trainer</option>
                    <option value="Cristian">Cristian</option>
                </select>
                <label class="formLabel" for="course_name">Status: Active Or Comming Soon</label>
                <input type="checkbox" id="" name="status" value="1">
                <label class="formLabel" for="course_name">Description</label>
                <script>
                    tinymce.init({
                        selector: 'textarea',
                        plugins: [
                            // Core editing features
                            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                            // Your account includes a free trial of TinyMCE premium features
                            // Try the most popular premium features until Mar 4, 2026:
                            'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
                        ],
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                        tinycomments_mode: 'embedded',
                        tinycomments_author: 'Author name',
                        mergetags_list: [
                            { value: 'First.Name', title: 'First Name' },
                            { value: 'Email', title: 'Email' },
                        ],
                        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
                        uploadcare_public_key: '532672c6d11822cd9a7e',
                    });
                </script>
                <textarea name="description">

                </textarea>
                <button type="submit" class="adminButton">Add</button>
            </form>
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
