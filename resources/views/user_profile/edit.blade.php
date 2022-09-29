@extends('layouts.master')

@section('content')  
<div class="edit-profile-area">
        <div class="profile-content d-flex justify-content-between align-items-center">
            <div class="profile-img">
                <img src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
                <h3>Rosemary Hamm</h3>
                <span>Member since 1 years ago</span>
                <span>Last seen this week</span>
                <button class="followers-btn">45 Followers</button>
                <button class="followers-btn">12 Following</button>
            </div>
{{-- 
            <div class="edit-btn">
                <a href="edit-profile.html" class="default-btn">Edit profile</a>
            </div> --}}
        </div>

        <div class="profile-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="edit-profile-tab" data-bs-toggle="tab" data-bs-target="#edit-profile" type="button" role="tab" aria-controls="edit-profile" aria-selected="true">Edit Profile</button>
                </li>
                
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">Change Password/Email</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="delete-account-tab" data-bs-toggle="tab" data-bs-target="#delete-account" type="button" role="tab" aria-controls="delete-account" aria-selected="false">Delete Account</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active edit-profile" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                    <div class="public-information">
                    <form id="edit-profile-data" class="edeite-content" method="post">
                        <h3>Public information</h3>

                        <div class="information d-flex align-items-center">
                            <img id="imgPreview-profile" src="https://www.asiantelegraphqatar.com/wp-content/uploads/2016/10/default-placeholder-1024x1024-400x280.png" style="max-width:20%; max-height:20%;object-fit: fill;" alt="Image">
                            
                            <div class="file-upload-account-info">
                                <input type="file" name="image" id="file-profile-upload" class="inputfile">
                                <label onclick="$('#file-profile-upload').trigger('click')" class="upload">
                                    <i class="ri-link"></i>
                                    Upload Photo
                                </label>
                                <span>Maximum file size: 10 MB.</span>
                            </div>
                        </div>

                        
                            <div class="form-group">
                                <label>Display name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <label>About me</label>
                                <div id="txtEditor"></div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="default-btn">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade edit-profile" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                    <div class="public-information">
                        <h3>Change Email</h3>

                        <form id="up-email" class="edeite-content">
                            <div class="form-group email-save">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Rosemary@gmail.com">
                                <button type="submit"  class="default-btn">Save change</button>
                            </div>
                        </form>

                        <h3>Change password</h3>

                        <form id="up-pass" class="edeite-content">
                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="new_password" id="new-password">
                            </div>

                            <div class="form-group">
                                <label>New Password (again)</label>
                                <input type="password" class="form-control" name="new_password_again" id="new-password-again">
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="default-btn">Save change</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade edit-profile" id="delete-account" role="tabpanel" aria-labelledby="delete-account-tab">
                    <div class="public-information">
                        <h3>Delete Account</h3>
                        
                        <ul class="delete-account">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault-9">
                                    <label class="form-check-label" for="flexCheckDefault-9">
                                        Delete your account?
                                    </label>
                                </div>
                            </li>
                            <li>
                                <a href="index.html" class="default-btn">
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $("#app").removeClass("col-lg-6");
            $("#app").addClass("col-lg-9");
            $("#aside").remove();        
        });
    </script>
    {{-- img preview --}}
    <script>
        $(document).ready(() => {
            $("#file-profile-upload").change(function () {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgPreview-profile")
                        .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    <script>
            $(document).ready(function () {


            $("#edit-profile-data").submit(function (e) { 
            // alert()
            e.preventDefault();
            let id = {{Auth::id()}}
            let text = $("#txtEditor").Editor("getText"); 
            let data = new FormData(this)
            data.append('text', text);
            data.append('id', id);
                $.ajax({
                type: "POST",
                url: "\\api/data/profile/update",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                    success: function (rsp) {
                        alert(rsp)
                    }
                });
            }); 
            });
    </script>
    <script>
        const vues = Vue.createApp({
            data() {
                return {
                    
                }
            },
            mounted() {
                $(document).ready(function () {
                    let id_user = {{Auth::id()}}
                    $("#up-email").submit(function (e) { 
                        e.preventDefault();
                        let type = 'em'
                        let data = $(this).serialize();
                        console.log(data+'&type='+type+'&id='+id_user);
                        $.post("\\api/data/profile/update",data+'&type='+type+'&id='+id_user,
                            function (rsp) {
                                
                            },
                            "json"
                        );
                    });

                    $("#up-pass").submit(function (e) { 
                        e.preventDefault();
                        alert()
                        let type = 'pw'
                        let data = $(this).serialize();
                        console.log(data+'&type='+type+'&id='+id_user);
                        $.post("\\api/data/profile/update",data+'&type='+type+'&id='+id_user,
                            function (rsp) {
                                
                            },
                            "json"
                        );
                    });
                });
            },
        }).mount('#app')
    </script>
@endpush