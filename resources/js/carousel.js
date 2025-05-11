class Carousel {
    constructor(element, options) {
        this.element = element;
        this.options = Object.assign(
            {},
            {
                slidesVisible: 1,
                slidesToScroll: 1,
                pagination: true,
            },
            options
        );
        this.childrens = [].slice.call(this.element.children);
        this.currentItem = 0;
        this.moveCallbacks = [];
        this.root = this.createWithClass("caroussel");
        this.container = this.createWithClass("caroussel__container");

        this.root.appendChild(this.container);
        this.element.appendChild(this.root);

        this.items = this.childrens.map((element) => {
            let item = this.createWithClass("caroussel__item");
            item.appendChild(element);
            this.container.appendChild(item);
            return item;
        });
        this.setStyle();
        this.createNavigation();

        if (this.options.pagination) {
            this.createPagination();
        }
        this.moveCallbacks.forEach((cb) => cb(0));
    }

    createPagination() {
        let pagination = this.createWithClass("caroussel_pagination");
        let buttons = [];
        this.root.appendChild(pagination);
        for (
            let i = 0;
            i < this.items.length;
            i = i + this.options.slidesToScroll
        ) {
            let button = this.createWithClass("caroussel__pagination__button");
            pagination.appendChild(button);
            button.addEventListener("click", () => this.gotoItem(i));
            buttons.push(button);
        }
        this.onMove((index) => {
            let activeButton =
                buttons[Math.floor(index / this.options.slidesToScroll)];
            if (activeButton) {
                buttons.forEach((button) =>
                    button.classList.remove(
                        "caroussel__pagination__button--active"
                    )
                );
                activeButton.classList.add(
                    "caroussel__pagination__button--active"
                );
            }
        });
    }

    createNavigation() {
        let nextButton = this.createWithClass("caroussel__next");
        let prevButton = this.createWithClass("caroussel__prev");
        this.root.appendChild(nextButton);
        this.root.appendChild(prevButton);
        nextButton.addEventListener("click", this.next.bind(this));
        prevButton.addEventListener("click", this.prev.bind(this));
        this.onMove((index) => {
            if (index === 0) {
                prevButton.classList.add("caroussel__prev--hidden");
            } else {
                prevButton.classList.remove("caroussel__prev--hidden");
            }
            if (
                this.items[this.currentItem + this.options.slidesVisible] ===
                undefined
            ) {
                nextButton.classList.add("caroussel__next--hidden");
            } else {
                nextButton.classList.remove("caroussel__next--hidden");
            }
        });
    }

    gotoItem(index) {
        if (index < 0) {
            index = this.items.length - this.options.slidesVisible;
        } else if (
            index >= this.items.length ||
            (this.items[this.currentItem + this.options.slidesVisible] ===
                undefined &&
                index > this.currentItem)
        ) {
            index = 0;
        }
        let translateX = (index * -100) / this.items.length;
        this.container.style.transform =
            "translate3d(" + translateX + "%, 0, 0)";
        this.currentItem = index;
        this.moveCallbacks.forEach((cb) => cb(index));
    }

    onMove(cb) {
        this.moveCallbacks.push(cb);
    }

    next() {
        this.gotoItem(this.currentItem + this.options.slidesToScroll);
    }

    prev() {
        this.gotoItem(this.currentItem - this.options.slidesToScroll);
    }

    setStyle() {
        let ratio = this.childrens.length / this.options.slidesVisible;
        this.items.forEach((item) => {
            item.style.width =
                (1 / this.options.slidesVisible / ratio) * 100 + "%";
        });
        this.container.style.width = ratio * 100 + "%";
    }

    createWithClass(className) {
        let div = document.createElement("div");
        div.setAttribute("class", className);
        return div;
    }
}

document.addEventListener("turbo:load", function () {
    new Carousel(document.querySelector(".image"), {
        slidesVisible: 1,
        slidesToScroll: 1,
    });
});

// CLIQUE SUR L'IMAGE DU EN UNE SUR LE CARROUSSEL ACTUELEMENT
document.addEventListener("turbo:load", function () {
    const lightbox = document.querySelector(".lightbox");
    const closeLightbox = document.querySelector(".close-lightbox");
    function openLightBox(src) {
        lightbox.querySelector(".lightbox-img").src = src;
        lightbox.style.display = "flex";
    }

    function closeLightBox() {
        lightbox.style.display = "none";
    }

    function setupForLargeScreens() {
        if (window.innerWidth >= 1025) {
            document
                .querySelectorAll(".caroussel img")
                .forEach((img) =>
                    img.addEventListener("click", () => openLightBox(img.src))
                );
        }
    }
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" || e.key === "esc") {
            closeLightBox();
        }
    });

    closeLightbox.addEventListener("click", () => {
        closeLightBox();
    });

    setupForLargeScreens();

    window.addEventListener("resize", setupForLargeScreens);
});
