<div x-data="feedbackSlider()" x-init="init()" class="feedback-container">

    <!-- Google Logo and Single-Line Auto Slider Track -->
    <div class="feedback-wrapper">
        <div class="feedback-brand">
            <!-- Official Google Colored G Logo -->
            <svg class="google-logo" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
            </svg>
        </div>

        <div class="feedback-window" x-ref="windowRef">
            <div class="feedback-track" :style="`transform: translateX(-${currentIndex * cardWidth}px)`">

                <template x-for="feedback in feedbacks" :key="feedback.id">
                    <div class="feedback-card" :style="`width: ${cardWidth}px; min-width: ${cardWidth}px;`">
                        <div class="feedback-inner">
                            <img :src="feedback.avatar" alt="Reviewer" class="feedback-avatar">
                            <span class="feedback-comment" x-text="`&quot;${feedback.comment}&quot;`"></span>
                            <div class="feedback-stars" x-text="'★'.repeat(feedback.rating)"></div>
                        </div>
                    </div>
                </template>

            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('feedbackSlider', () => ({
            feedbacks: [],
            currentIndex: 0,
            cardWidth: 0,
            timer: null,

            init() {
                fetch("/data/feedback.json")
                    .then(res => res.json())
                    .then(data => {
                        this.feedbacks = data;
                        this.calculateWidth();
                    })
                    .catch(err => console.error('Error fetching feedbacks:', err));

                // Recalculate precisely if the browser screen size changes
                window.addEventListener('resize', () => {
                    this.calculateWidth();
                });

                this.timer = setInterval(() => {
                    if (this.feedbacks.length === 0) return;
                    const itemsPerView = window.innerWidth >= 768 ? 2 : 1;
                    const maxIdx = Math.max(0, this.feedbacks.length - itemsPerView);
                    this.currentIndex = this.currentIndex < maxIdx ? this.currentIndex + 1 : 0;
                }, 4000);
            },

            calculateWidth() {
                if (this.$refs.windowRef) {
                    const totalWidth = this.$refs.windowRef.clientWidth;
                    const itemsPerView = window.innerWidth >= 768 ? 2 : 1;
                    this.cardWidth = totalWidth / itemsPerView;
                }
            }
        }));
    });
</script>
