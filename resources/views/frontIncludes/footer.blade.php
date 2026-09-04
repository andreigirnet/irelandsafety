<footer class="main-footer">
    <div class="footer-container">

        <!-- COLUMN 1: CUSTOMER SUPPORT -->
        <div class="footer-column">
            <h3 class="footer-heading">CUSTOMER SUPPORT</h3>
            <ul class="footer-links">
                <li><a href="{{ route('front.faq') }}">FAQs</a></li>
                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                <li><a href="{{ route('front.team') }}">Team Training</a></li>
                <li><a href="{{ route('front.verify') }}">Verify Certificate</a></li>
            </ul>
        </div>

        <!-- COLUMN 2: COMPANY -->
        <div class="footer-column">
            <h3 class="footer-heading">COMPANY</h3>
            <ul class="footer-links">
                <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                <li><a href="{{ route('front.cookies') }}">Cookies Policy</a></li>
                <li><a href="{{ route('front.accreditation') }}">Accreditations</a></li>
                <li><a href="{{ route('front.privacy') }}">Privacy policy</a></li>
                <li><a href="{{ route('front.refund') }}">Refund policy</a></li>
                <li><a href="{{ route('front.legal') }}">Legal</a></li>
            </ul>
        </div>

        <!-- COLUMN 3: MANUAL HANDLING (PRIMARY SERVICES) -->
        <div class="footer-column">
            <h3 class="footer-heading">Our Courses</h3>
            <ul class="footer-links">
                <li><a href="#courses">Manual Handling</a></li>
                <li><a href="#courses">Working At Heights</a></li>
                <li><a href="#courses">Abrasive Wheels</a></li>
                <li><a href="#courses">HACCP</a></li>
                <li><a href="#courses">Fire Safety</a></li>
            </ul>
        </div>

{{--        <!-- COLUMN 4: LOCATIONS -->--}}
{{--        <div class="footer-column">--}}
{{--            <h3 class="footer-heading">LOCATIONS</h3>--}}
{{--            <ul class="footer-links">--}}
{{--                <li><a href="{{ route('front.manual.dublin') }}">Manual Handling Dublin</a></li>--}}
{{--                <li><a href="{{ route('front.manual.handling.cork') }}">Manual Handling Cork</a></li>--}}
{{--                <li><a href="{{ route('front.manual.handling.galway') }}">Manual Handling Galway</a></li>--}}
{{--                <li><a href="{{ route('front.manual.handling.limerick') }}">Manual Handling Limerick</a></li>--}}
{{--                <li><a href="{{ route('front.manual.handling.waterford') }}">Manual Handling Waterford</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}

        <!-- COLUMN 5: BUYER PROTECTION -->
        <div class="footer-column protection">
            <h3 class="footer-heading">BUYER PROTECTION</h3>
            <p class="protection-subtext">Fast, encrypted payments</p>

            <div class="stripe-badge">
                Powered by <strong>stripe</strong>
            </div>

            <p class="payment-title">Accepted payment methods</p>
            <div class="payment-icons">
                <!-- Large Icons for Visibility -->
                <img src="https://img.icons8.com/color/96/visa.png" class="footerImg" alt="Visa">
                <img src="https://img.icons8.com/color/96/mastercard.png" class="footerImg" alt="Mastercard">
                <img src="https://img.icons8.com/ios-filled/96/000000/apple-pay.png" class="footerImg" alt="Apple Pay">
                <img src="https://img.icons8.com/color/96/google-pay.png" class="footerImg" alt="Google Pay">
            </div>

            <!-- Corporate Identity & Legal Footer Information -->
            <div class="footer-legal-info mt-4 pt-3 border-top" style="border-top: 1px solid rgba(255, 255, 255, 0.1); margin-top: 1.5rem; padding-top: 1rem;">
                <p class="footer-company-name mb-1" style="font-size: 0.9rem; font-weight: 700; color: #fff;">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</p>
                <p class="footer-reg-num mb-1" style="font-size: 0.85rem; color: #94a3b8;">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED CRO Reg. Number: <strong>822301</strong></p>
                <p class="footer-address mb-2" style="font-size: 0.85rem; color: #94a3b8; line-height: 1.4;">WORKHUB 51 Bracken Road Sandyford DUBLIN Ireland D18 CV48</p>
                <p class="footer-contact mb-0" style="font-size: 0.85rem; color: #94a3b8;">
                    Support: <a href="mailto:info@ireland-safetycourse.com" style="color: #60a5fa; text-decoration: none;">info@ireland-safetycourse.com</a>
                </p>
            </div>
        </div>

    </div>

</footer>
