import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//=== custom script
const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
);
const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
);

setTimeout(() => {
    document.querySelector('.dashboard-loader-wrapper')?document.querySelector('.dashboard-loader-wrapper').classList.add('d-none'):'';
    document.querySelector('.dashboard-items')?document.querySelector('.dashboard-items').classList.remove('d-none'):'';
}, 1000);

if(document.querySelector('.alert-div')){
    setTimeout(()=>{
        document.querySelector('.alert-div').remove();
    },10000);
}

if(document.querySelector('.alert-close')){
    document.querySelector('.alert-close').addEventListener('click', function (){
        this.closest('.alert-div').remove();
    })
}

if(document.querySelector('.choose-item-js')){
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

            self.closest('.dashboard-items').querySelector('.checkout-btn-holder').classList.remove('d-none');

            self.closest('.item-box').querySelector('.product-quantity').value = 1;
            self.closest('.item-box').querySelector('.itempicked-quantity').value = self.closest('.item-box').querySelector('.product-quantity').value;

            self.closest('.dashboard-box').querySelector('.image-holder img').setAttribute('src', '/images/'+imageName);
            self.closest('.dashboard-box').querySelector('.name-item-js').innerText = itemName;
            self.closest('.dashboard-box').querySelector('.unit-price-js').innerText = unitPrice;
            self.closest('.dashboard-box').querySelector('.not-item-selected').classList.add('d-none');

            element.closest('.item-box').querySelector('.item-name').value = itemName;
            element.closest('.item-box').querySelector('.item-unitprice').value = unitPrice;
            element.closest('.item-box').querySelector('.item-image').value = imageName;

            calculateItemTotal(1, itemBox);
            let initialQuantity = self.closest('.item-box').querySelector('.product-quantity').value;
            element.closest('.item-box').querySelector('.itempicked-quantity').value = initialQuantity;
            element.closest('.item-box').querySelector('.item-totalprice').value = parseFloat(unitPrice)*parseInt(initialQuantity);

            self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.remove('d-none');

        });
    });
}

if(document.getElementById('checkout-form')){
    document.getElementById('checkout-form').addEventListener('submit', ()=>{
        document.querySelector('.full-page-loader').classList.add('active');
        document.querySelector('.main-div').classList.add('blured');
    });
}

decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
});

incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
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

    if(!btn.closest('.item-box').querySelector('.product-quantity')) return;
    let quantity = btn.closest('.item-box').querySelector('.product-quantity').value;
    btn.closest('.item-box').querySelector('.itempicked-quantity').value = quantity;
    btn.closest('.item-box').querySelector('.item-totalprice').value = parseFloat(itemBox.querySelector('.item-unitprice').value)*parseInt(quantity);
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

    if(!btn.closest('.item-box').querySelector('.product-quantity')) return;
    let quantity = btn.closest('.item-box').querySelector('.product-quantity').value;
    btn.closest('.item-box').querySelector('.itempicked-quantity').value = quantity;
    btn.closest('.item-box').querySelector('.item-totalprice').value = parseFloat(itemBox.querySelector('.item-unitprice').value)*parseInt(quantity);
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


