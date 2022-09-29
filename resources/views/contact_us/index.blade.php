@extends('layouts.master')

@section('content')
<div class="contact-form">
    <h2>Get in touch</h2>

    <form id="contactForm">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your email">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label>Your Subject</label>
                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Write your message"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            {{-- <div class="col-12">
                <div class="form-check ps-0">
                    <div class="form-group">
                        <div class="form-check">
                            <input
                                name="gridCheck"
                                value="I agree to the terms and privacy policy."
                                class="form-check-input"
                                type="checkbox"
                                id="gridCheck"
                                required
                            >
                    
                            <label class="form-check-label" for="gridCheck">
                                I agree to the <a href="terms-conditions.html">Terms</a> and <a href="privacy-policy.html">Privacy Policy</a>
                            </label>
                            <div class="help-block with-errors gridCheck-error"></div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-12 col-md-12">
                <button type="submit" class="default-btn">
                    Send Message
                </button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $("#contactForm").submit(function (e) { 
        e.preventDefault();
        
        $.ajax({
            type: "post",
            url: "api/contactus/store",
            data: ,
            dataType: "dataType",
            success: function (rsp) {
                alert(rsp)
            }
        });
    });
</script>
@endpush