@extends('frontend.layouts.app')

@section('description')
    @php
        $data = metaData('faq');
    @endphp
    {{ $data->description }}
@endsection
@section('og:image')
    {{ asset($data->image) }}
@endsection
@section('title')
    {{ $data->title }}
@endsection

@section('main')
<div class="breadcrumbs breadcrumbs-height">
    <div class="container">
      <div class="row align-items-center breadcrumbs-height">
        <div class="col-12 justify-content-center text-center">
          <div class="breadcrumb-title rt-mb-10">   {{ __('faq') }}</div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="{{ route('website.home') }}">  {{ __('home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">   {{ __('faq') }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Faq Starts-->
  <div class="container">
    <div class="tw-max-w-[648px] mx-auto faq-page tw-py-8">
      <div class="rt-faq rt-pt-30 rt-pt-md-30">
        <h6 class="ft-wt-5 tw-text-2xl text-primary-500 text-capitalize rt-mb-24">General</h6>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading1">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                What is Jobrecruita?
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1">
              <div class="accordion-body accordion-pad">
                Jobrecruita is an online platform that connects job seekers with employers, making it easy to find and apply for jobs or post job openings.
              </div>
            </div>
          </div>
        </div>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading2">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                How do I create an account?
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2">
              <div class="accordion-body accordion-pad">
                Click on the "Sign Up" button and fill in the required information. You will receive a confirmation email to activate your account.
              </div>
            </div>
          </div>
        </div>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading3">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                Is Jobrecruita free to use?
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3">
              <div class="accordion-body accordion-pad">
                Creating an account and searching for jobs is free for job seekers. Employers may be charged for posting jobs or accessing premium features.
              </div>
            </div>
          </div>
        </div>
        <h6 class="ft-wt-5 tw-text-2xl text-primary-500 text-capitalize rt-mb-24">Job Seekers</h6>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading4">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                How do I apply for a job?
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4">
              <div class="accordion-body accordion-pad">
                Once you find a job you are interested in, click "Apply" and follow the instructions to submit your application and resume.
              </div>
            </div>
          </div>
        </div>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                Can I upload multiple resumes?
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5">
              <div class="accordion-body accordion-pad">
                Yes, you can upload and manage multiple resumes from your profile to tailor your applications for different jobs.
              </div>
            </div>
          </div>
        </div>
        <h6 class="ft-wt-5 tw-text-2xl text-primary-500 text-capitalize rt-mb-24">Employers</h6>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                How do I post a job?
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6">
              <div class="accordion-body accordion-pad">
                Register as an employer, log in to your dashboard, and click "Post a Job." Fill in the job details and submit your listing.
              </div>
            </div>
          </div>
        </div>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading7">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                How can I manage applications?
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7">
              <div class="accordion-body accordion-pad">
                You can view, filter, and respond to applications from your employer dashboard.
              </div>
            </div>
          </div>
        </div>
        <h6 class="ft-wt-5 tw-text-2xl text-primary-500 text-capitalize rt-mb-24">Support</h6>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading8">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                How do I contact support?
              </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8">
              <div class="accordion-body accordion-pad">
                You can contact our support team via the <a href="{{ route('website.contact') }}">Contact Us</a> page or by emailing {{ $setting->email ?? 'support@jobrecruita.com' }}.
              </div>
            </div>
          </div>
        </div>
        <div class="accordion rt-mb-24 ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading9">
              <button class="accordion-button accordion-pad body-font-2 text-gray-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                Is my information safe on Jobrecruita?
              </button>
            </h2>
            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9">
              <div class="accordion-body accordion-pad">
                Yes, we take your privacy seriously. Please read our <a href="{{ route('website.privacyPolicy') }}">Privacy Policy</a> for more details.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Faq End-->

{{-- Subscribe Newsletter  --}}
<x-website.subscribe-newsletter/>
@endsection
