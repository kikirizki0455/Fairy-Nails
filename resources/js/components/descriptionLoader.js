

// resources/js/components/descriptionLoader.js
export default () => ({
    isVisible: false,
    
    initIntersectionObserver() {
        setTimeout(() => {
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
        }, 100);
    }
});