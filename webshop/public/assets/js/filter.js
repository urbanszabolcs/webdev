document.addEventListener("DOMContentLoaded", function() {
    const filter = document.getElementById("categoryFilter");
    const products = document.querySelectorAll(".product-card");

    filter.addEventListener("change", function() {
        const selectedCategory = this.value;

        products.forEach(product => {
            if (selectedCategory === "all" || product.getAttribute("data-category") === selectedCategory) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    });
});
