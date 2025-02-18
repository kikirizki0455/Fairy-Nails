// resources/js/components/mediaLoader.js
export default () => ({
    imageLoaded: false,
    isVisible: false,
    
    initIntersectionObserver() {
        const observer = new IntersectionObserver(
            ([entry]) => {
                this.isVisible = entry.isIntersecting;
                if (this.isVisible) {
                    observer.unobserve(this.$el);
                }
            },
            { rootMargin: '50px', threshold: 0.1 }
        );
        observer.observe(this.$el);
    }
});
