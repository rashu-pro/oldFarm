import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//=== custom script
setTimeout(() => {
    document.querySelector('.dashboard-loader-wrapper').classList.add('d-none');
    document.querySelector('.dashboard-items').classList.remove('d-none');
}, 1000);

document.querySelectorAll('.choose-item-js').forEach(element=>{
    element.addEventListener('change', function(){
        let self = this,
            selectedItemCategory = this.options[this.selectedIndex],
            itemName = selectedItemCategory.getAttribute('data-name'),
            imageName = selectedItemCategory.getAttribute('data-image-name'),
            unitPrice = selectedItemCategory.getAttribute('data-unitprice'),
            itemBox = self.closest('.item-box');

        if(!itemName){
            self.closest('.dashboard-box').querySelector('.image-holder img').setAttribute('src', '/images/placeholder_image_cropped.jpg');
            self.closest('.dashboard-box').querySelector('.not-item-selected').classList.remove('d-none');
            self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.add('d-none');
            return;
        }

        self.closest('.dashboard-box').querySelector('.image-holder img').setAttribute('src', '/images/'+imageName);
        self.closest('.dashboard-box').querySelector('.name-item-js').innerText = itemName;
        self.closest('.dashboard-box').querySelector('.unit-price-js').innerText = unitPrice;
        self.closest('.dashboard-box').querySelector('.not-item-selected').classList.add('d-none');

        calculateItemTotal(1, itemBox);

        self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.remove('d-none');

    });
});

//=== QUANTITY SELECTOR SCRIPT
function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    let itemBox = target.closest('.item-box');
    if(value<2) return;
    value--;
    target.value = value;
    calculateItemTotal(value, itemBox);
}

function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    let itemBox = target.closest('.item-box');
    value++;
    target.value = value;
    calculateItemTotal(value, itemBox);
}

/**
 *
 * @param quantity
 * @param itemBox
 */
function calculateItemTotal(quantity, itemBox){
    let itemTotalPrice = parseInt(quantity)*parseFloat(itemBox.querySelector('.unit-price-js').textContent);
    itemBox.querySelector('.item-quantity').innerHTML = quantity;
    itemBox.querySelector('.item-total-price-js').innerHTML = itemTotalPrice.toFixed(2);
}

const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
);

const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
);

decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
});

incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
});


