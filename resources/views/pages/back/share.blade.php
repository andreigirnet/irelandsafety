@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])

    <div class="pkg-share-wrapper" x-data="{
        query:'',
        showResult: false,
        showMessage: false,
        selectedEmployee:'',
        message: '',
        showSubmitButton: false,
        users: [],
        checkIfSelected: function(){
            this.showSubmitButton = true
        },
        getUsers: function(){
            if(this.query !== ''){
                axios.get('/search/employees?q=' + this.query)
                .then(response => {
                    this.users = response.data

                    if(this.users.length === 0){
                        this.showResult = false
                        this.showSubmitButton = false
                        this.showMessage = true
                        this.message = 'No employee has been found with this email'
                    }else
                    {
                        this.showResult = true;
                        this.showMessage = false
                        this.message = ''
                    }
                })
                .catch(error => console.log(error));
            }else{
                this.users = [];
                this.showResult = false;
                this.showSubmitButton = false;
                this.showMessage = false
                this.message = ''
            }
        }
    }">
        <div class="pkg-share-title">Share a package</div>
        <div class="pkg-share-container">
            <div class="pkg-share-highlight">Package to Share:
                <div>#{{$packageToShare[0]->id}} - {{$packageToShare[0]->course_name}}</div>
            </div>

            @if($employeesToShare)
                <div>
                    <div class="pkg-share-select-title">Type the email to search the employee</div>
                    <form action="{{route('package.share.store',$packageToShare[0]->id)}}" method="POST" class="pkg-share-form" id="pkg-share-form-id">
                        @csrf
                        @method('POST')
                        <input type="text" class="pkg-share-input" x-model="query" x-on:keyup.debounce.500ms="getUsers" placeholder="Type the email of the user...">

                        <!-- Added :key="user.id" to the template to prevent Alpine.js duplication bugs -->
                        <select x-show="showResult" name="shareToEmployee" id="pkg-share-select-box" @change="checkIfSelected" style="height: 200px; width: 100%;" x-model="selectedEmployee" multiple>
                            <template x-for="user in users" :key="user.id">
                                <!-- Display Name + Email instead of just Email -->
                                <option x-text="user.name + ' (' + user.email + ')'" :value="user.id"></option>
                            </template>
                        </select>

                        <div class="pkg-share-message" x-text="message" x-show="showMessage"></div>
                        <button class="pkg-share-submit-btn" type="submit" x-show="showSubmitButton" id="pkg-share-submit-id">Share Package</button>
                    </form>
                </div>
            @else
                <div class="pkg-share-empty-state">
                    <div class="pkg-share-empty-text">Please register some employees in order to be able to share a course</div>
                    <a href="{{route('register.employee')}}" style="text-decoration: none;"><div class="pkg-share-empty-btn">Register employees</div></a>
                </div>
            @endif
        </div>
    </div>

    <script>
        document.getElementById('pkg-share-form-id').addEventListener('keydown', function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
            }
        });
    </script>

@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
