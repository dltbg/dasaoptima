@extends('layouts.master')
@section('menu-contact-us', 'active')
@section('page-content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Get in Touch</p>
                <h2 class="text-color-secondary font-weight-bold mb-3 text-capitalize mb-2 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Send Us a Message</h2>

                <form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Your First Name" value="" data-msg-required="Please enter your First name." maxlength="100" class="form-control" name="first_ame" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Your Last Name" value="" data-msg-required="Please enter your Last name." maxlength="100" class="form-control" name="last_name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Company Name" value="" data-msg-required="Please enter your Company Name." maxlength="100" class="form-control" name="company_name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Job Title" value="" data-msg-required="Please enter your Job Title." maxlength="100" class="form-control" name="job_title">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" placeholder="Business Email" value="" data-msg-required="Please enter your Business Email." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="business_email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input placeholder="Country" type="text" value="" data-msg-required="Please enter the country" maxlength="100" class="form-control" name="country" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <textarea placeholder="How Can We Help?" maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
