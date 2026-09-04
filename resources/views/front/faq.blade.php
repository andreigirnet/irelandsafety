@extends('front.app')
@section('content')

    <div class="fq-page-wrapper">
        <div class="fq-hero-banner">
            <h1 class="fq-page-title">Frequently Asked Questions</h1>
            <div class="fq-title-underline"></div>
        </div>

        <div class="fq-container">

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Manual Handling Guide</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Top Questions</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>Your digital certificate is available for immediate download the moment you finish the program.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>After the theoretical modules, you can arrange a 20-30 minute virtual practical assessment with our qualified assessor.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The total enrollment fee for manual handling is €35, which covers all assessments without hidden costs.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The platform is available 24/7, allowing you to study whenever and wherever you choose.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>Our training portal is optimized for smartphones, tablets, laptops, and desktop computers.</span></div>
                        </div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Practical Skills Assessment</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Once you have successfully passed the final theory exam, please reach out to us via our Online Chat to book your live practical session. These sessions are held in a virtual classroom and last roughly 15-20 minutes. There are no extra charges for this part of the training; it is fully included in the initial price.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Accreditation & Standards</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>This certification is delivered at the NFQ Level 6 standard.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Certificate Access</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Your credentials will be delivered to your registered email address and are also stored in your user profile for easy printing. You can access them instantly upon completion. 📱📩</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Are there hidden fees for the practical part?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Absolutely not. The €35 fee is all-inclusive, covering the theoretical modules, the final exam, and the practical skills demonstration.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Satisfaction Guarantee</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>We want you to feel confident in your choice. We provide a 15-day refund policy with no questions asked. To be eligible, you must not have finished the course or generated the certificate. Simply contact us via Online Chat to request a refund.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">How do I manage training for a group of staff members?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>We provide a comprehensive PDF guide for business accounts. This dashboard allows you to track employee progress, manage licenses, and archive certificates. Our system is designed for transparency and ease of use for HR managers and business owners. If you need help getting started, please message us through the Online Chat.</div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">About Ireland Safety Course</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Which devices can I use for learning?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Any device with a standard web browser and an internet connection will work perfectly.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Are the instructors certified professionals?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Yes, every instructor is a certified instructor and holds NFQ Level 6 qualifications, ensuring your training meets all Irish HSA legal requirements.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Can I review the material after I finish?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Yes, your login remains active 24/7, giving you perpetual access to the study materials even after you have been certified.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Is there a deadline to finish the course?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>There is no time pressure. You can complete the training in one sitting or break it into smaller sessions. Your progress is saved automatically, and you can recover your login details via the 'Forgot Password' link at any time.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Can I take this course from abroad?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Yes, our portal is globally accessible. While the content follows international safety standards, please verify that it meets the specific local legislation if you are working outside of Ireland. The assessment requirements remain the same regardless of your location.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Do you offer corporate discounts?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Yes! We offer a 10% discount for orders of 10 courses or more. This is applied automatically at checkout. For larger group rates, please speak with our team via the Online Chat.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">What languages can I study in?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>The core educational content is available in English, Polish, Spanish, Romanian, Russian, and Ukrainian. Note: The final practical assessment and self-evaluation are currently conducted in English only.</div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/carts.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Enrollment & Payments</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">How do I begin?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Simply select your course and sign up; you can start learning on any device immediately.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Buying for a team?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Add the required number of seats to your cart. Once purchased, you can assign them to staff members through the 'Packages' section in your dashboard.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Payment methods</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>We accept all major credit and debit cards for instant access. We also support bank transfers for businesses requiring an invoice, though access is only granted once funds are cleared (usually 24-48 hours). A formal invoice is generated for every transaction.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Volume discounts</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Discounts for bulk orders are calculated automatically. You will save 10% when purchasing 10 or more licenses at once.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Can I buy a gift or license for one other person?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Yes. Just use the candidate’s name and email during the checkout process, and the login credentials will be sent directly to them.</div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/login.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Account Access</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">I paid for the course, what now?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Visit <a href="{{route('register')}}" style="color: blue">"https://ireland-safetycourse.com/packages"</a> to activate your license. If you have trouble, contact us via the Online Chat.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Password recovery</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Use the 'Forgot Password' link on the login page. If the course seems stuck, we recommend clearing your browser cache and using Google Chrome for the best experience. For further help, message us on the Online Chat.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Technical issues during training</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Most technical glitches are solved by clearing your browser's temporary files or logging out and back in. We highly recommend using the latest version of Google Chrome. If problems persist, our team is available via the Online Chat.</div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/sunny.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Exams & Diplomas</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">What if I fail the final test?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Don't worry. You have unlimited free attempts and three years of access to the content to ensure you pass successfully.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">How do I get my diploma?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>Upon completion and verification of payment, a PDF certificate is generated instantly for download.</div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Replacement for lost certificates</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>We do not issue plastic cards, but your digital PDF is valid and stored in our database for three years. You can log in and re-download it at any time. If you cannot log in, use the 'Forgot Password' feature or reach out via the Online Chat. As a reminder, the course material is available in several languages, but the practical assessment is conducted in English.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
