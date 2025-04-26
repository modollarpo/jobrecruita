@extends('frontend.layouts.app')

@section('description')
    @php
    $data = metaData('terms-condition');
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
                    <div class="breadcrumb-title rt-mb-10"> {{ __('terms_conditions') }}</div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('website.home') }}">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('terms_conditions') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="terms-condition ">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 order-1 order-lg-0 rt-mb-lg-20">
                    <div>
                        <div class="rt-spacer-50"></div>
                        <div class="body-font-3 text-gray-500 rt-mb-24">
                            <h3>Terms and Conditions</h3>
                            <p>Welcome to Jobrecruita. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before using our services.</p>
                            
                            <h5>1. Acceptance of Terms</h5>
                            <p>By accessing or using Jobrecruita, you agree to these Terms and Conditions and our Privacy Policy. If you do not agree, please do not use our services.</p>
                            
                            <h5>2. Eligibility</h5>
                            <ul>
                                <li>You must be at least 18 years old to use this website.</li>
                                <li>By using this site, you represent and warrant that you have the right, authority, and capacity to enter into these Terms.</li>
                            </ul>
                            
                            <h5>3. Account Registration</h5>
                            <ul>
                                <li>You may need to create an account to access certain features.</li>
                                <li>You are responsible for maintaining the confidentiality of your account credentials.</li>
                                <li>You agree to provide accurate and complete information during registration and to update your information as needed.</li>
                            </ul>
                            
                            <h5>4. Use of the Website</h5>
                            <ul>
                                <li>You agree to use the site only for lawful purposes and in accordance with these Terms.</li>
                                <li>You will not use the site to post or transmit any material that is unlawful, abusive, defamatory, obscene, or otherwise objectionable.</li>
                                <li>You will not attempt to gain unauthorized access to any part of the site or to other users’ accounts.</li>
                            </ul>
                            
                            <h5>5. User Content</h5>
                            <ul>
                                <li>You are solely responsible for any content you post, upload, or submit to the site.</li>
                                <li>You grant Jobrecruita a non-exclusive, royalty-free, worldwide license to use, display, and distribute your content in connection with the operation of the site.</li>
                                <li>We reserve the right to remove any content that violates these Terms or is otherwise inappropriate.</li>
                            </ul>
                            
                            <h5>6. Job Listings and Applications</h5>
                            <ul>
                                <li>Jobrecruita does not guarantee job placement or the accuracy of job listings.</li>
                                <li>Employers are responsible for the content of their job postings and for complying with applicable laws.</li>
                                <li>Applicants are responsible for the accuracy of their applications and information provided.</li>
                            </ul>
                            
                            <h5>7. Fees and Payments</h5>
                            <ul>
                                <li>Certain features or services may require payment. All fees are described on the site and are subject to change.</li>
                                <li>Payments are non-refundable except as required by law or as otherwise stated in writing.</li>
                            </ul>
                            
                            <h5>8. Intellectual Property</h5>
                            <p>All content on this site, including text, graphics, logos, and software, is the property of Jobrecruita or its licensors and is protected by copyright and other intellectual property laws. You may not use, reproduce, or distribute any content without our written permission.</p>
                            
                            <h5>9. Third-Party Links</h5>
                            <p>The site may contain links to third-party websites. Jobrecruita is not responsible for the content or practices of these sites. Access them at your own risk.</p>
                            
                            <h5>10. Disclaimer of Warranties</h5>
                            <p>Jobrecruita provides the site and services “as is” and without any warranty or condition, express, implied, or statutory. We do not guarantee that the site will be error-free or uninterrupted.</p>
                            
                            <h5>11. Limitation of Liability</h5>
                            <p>Jobrecruita is not liable for any direct, indirect, incidental, special, or consequential damages arising from your use of the site or services, even if we have been advised of the possibility of such damages.</p>
                            
                            <h5>12. Indemnification</h5>
                            <p>You agree to indemnify and hold harmless Jobrecruita, its affiliates, and their respective officers, directors, employees, and agents from any claims, damages, or expenses arising from your use of the site or violation of these Terms.</p>
                            
                            <h5>13. Changes to Terms</h5>
                            <p>We may update these Terms and Conditions at any time. Changes will be posted on this page. Continued use of the site after changes means you accept the updated terms.</p>
                            
                            <h5>14. Termination</h5>
                            <p>We reserve the right to suspend or terminate your access to the site at our discretion, without notice, for conduct that we believe violates these Terms or is harmful to other users or the site.</p>
                            
                            <h5>15. Governing Law</h5>
                            <p>These Terms and Conditions are governed by the laws of your local jurisdiction, without regard to its conflict of law principles.</p>
                            
                            <h5>16. Contact Us</h5>
                            <p>If you have any questions about these Terms and Conditions, please <a href="{{ route('website.contact') }}">contact us</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Subscribe Newsletter --}}
    <x-website.subscribe-newsletter />
@endsection
