@extends('layouts.master')

@section('content')
<div class="summary-area">
    <div class="profile-content d-flex justify-content-between align-items-center">
        <div class="profile-img">
            <img src="assets/images/user/profile-img.jpg" alt="Image">
            <h3>Rosemary Hamm</h3>
            <span>Member since 1 years ago</span>
            <span>Last seen this week</span>
            <button class="followers-btn">45 Followers</button>
            <button class="followers-btn">12 Following</button>
        </div>

        <div class="edit-btn">
            <a href="edit-profile.html" class="default-btn">Edit profile</a>
        </div>
    </div>

    <div class="summary-tabs">
        <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary" type="button" role="tab" aria-controls="summary" aria-selected="true">Summary</button>
            </li>
            
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="answers-tab" data-bs-toggle="tab" data-bs-target="#answers" type="button" role="tab" aria-controls="answers" aria-selected="false">Answers</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions" type="button" role="tab" aria-controls="questions" aria-selected="false">Questions</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tags-tab" data-bs-toggle="tab" data-bs-target="#tags" type="button" role="tab" aria-controls="tags" aria-selected="false">Tags</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="following-tab" data-bs-toggle="tab" data-bs-target="#following" type="button" role="tab" aria-controls="following" aria-selected="false">Following</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="votes-tab" data-bs-toggle="tab" data-bs-target="#votes" type="button" role="tab" aria-controls="votes" aria-selected="false">Votes</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Answers (@{{count_answer}})</h3>
                            <p>You have not <a href="all-queations.html">answered</a> any questions</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Group (@{{count_group}})</h3>
                            <p>You have no <a href="all-queations.html">badges</a></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Questions (@{{count_quest}})</h3>
                            <p>You have not asked any <a href="all-queations.html">questions</a></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Community (@{{count_commu}})</h3>
                            <p>You are  <a href="all-queations.html">following 12 communities.</a></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Votes (@{{count_vote}})</h3>
                            <p>You have not cast any <a href="all-queations.html">votes</a></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Tags (@{{count_tag}})</h3>
                            <p>You have not participated in any <a href="all-queations.html">tags</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="answers" role="tabpanel" aria-labelledby="answers-tab">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Answers (@{{count_answer}})</h3>
                            <p>You have not <a href="all-queations.html">answered</a> any questions</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Questions (@{{count_quest}})</h3>
                            <p>You have not asked any <a href="all-queations.html">questions</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Tags (@{{count_tag}})</h3>
                            <p>You have not participated in any <a href="all-queations.html">tags</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Communitiy (@{{count_commu}})</h3>
                            <p>You are  <a href="user-profile.html">following 12 posts.</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="votes" role="tabpanel" aria-labelledby="votes-tab">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-summary">
                            <h3>Votes (@{{count_vote}})</h3>
                            <p>You have not cast any <a href="most-visited.html">votes</a></p>
                        </div>
                    </div>
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

    let page = 1;
    let id_user = {{Auth::id()}}
</script>
<script>
    const vues = Vue.createApp({
        data() {
            return {
                count_answer:'',
                count_quest:'',
                count_vote:'',
                count_group:'',
                count_commu:'',
                count_tag:'',
            }
        },
        mounted() {
            $(document).ready(function () {
                if (page === 1) {
                    $.ajax({
                        type: "get",
                        url: "\\api/profile/detail",
                        data: {id_user:id_user},
                        dataType: "json",
                        success: function (rsp) {
                            vues.count_answer = rsp.count_answer
                            vues.count_quest = rsp.count_quest
                            vues.count_vote = rsp.count_vote
                            vues.count_group = rsp.count_group
                            vues.count_commu = rsp.count_commu
                            vues.count_tag = rsp.count_tag
                        }
                    });
                }
            });
        },              
    }).mount('#app')
</script>
@endpush