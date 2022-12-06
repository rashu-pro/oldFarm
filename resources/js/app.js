import './bootstrap';

import Alpine from 'alpinejs';
import ImageMap from "image-map";

window.Alpine = Alpine;

Alpine.start();

ImageMap('img[usemap]', 500);

//=== custom script
const decrementButtons = document.querySelectorAll(
  `button[data-action="decrement"]`
);
const incrementButtons = document.querySelectorAll(
  `button[data-action="increment"]`
);

setTimeout(() => {
  document.querySelector('.dashboard-loader-wrapper') ? document.querySelector('.dashboard-loader-wrapper').classList.add('d-none') : '';
  document.querySelector('.dashboard-items') ? document.querySelector('.dashboard-items').classList.remove('d-none') : '';
}, 1000);

if (document.querySelector('.alert-div')) {
  setTimeout(() => {
    document.querySelector('.alert-div').remove();
  }, 10000);
}

if (document.querySelector('.alert-close')) {
  document.querySelector('.alert-close').addEventListener('click', function () {
    this.closest('.alert-div').remove();
  })
}

if (document.querySelector('.choose-item-js')) {
  document.querySelectorAll('.choose-item-js').forEach(element => {
    element.addEventListener('change', function () {
      let self = this,
        selectedIndex = this.selectedIndex,
        selectedItemCategory = this.options[this.selectedIndex],
        itemName = selectedItemCategory.getAttribute('data-name'),
        imageName = selectedItemCategory.getAttribute('data-image-name'),
        unitPrice = selectedItemCategory.getAttribute('data-unitprice'),
        itemBox = self.closest('.item-box');

      if (!itemName) {
        self.closest('.dashboard-box').querySelector('.image-holder img').setAttribute('src', '/images/placeholder_image_cropped.jpg');
        self.closest('.dashboard-box').querySelector('.not-item-selected').classList.remove('d-none');
        self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.add('d-none');
        return;
      }


      self.closest('.dashboard-items').querySelector('.checkout-btn-holder').classList.remove('d-none');

      self.closest('.item-box').querySelector('.product-quantity').value = 1;
      self.closest('.item-box').querySelector('.itempicked-quantity').value = self.closest('.item-box').querySelector('.product-quantity').value;

      self.closest('.dashboard-box').querySelector('.image-holder img').setAttribute('src', '/uploads/' + imageName);
      self.closest('.dashboard-box').querySelector('.name-item-js').innerText = itemName;
      self.closest('.dashboard-box').querySelector('.unit-price-js').innerText = unitPrice;
      self.closest('.dashboard-box').querySelector('.not-item-selected').classList.add('d-none');

      element.closest('.item-box').querySelector('.item-name').value = itemName;
      element.closest('.item-box').querySelector('.item-unitprice').value = unitPrice;
      element.closest('.item-box').querySelector('.item-image').value = imageName;

      calculateItemTotal(1, itemBox);
      let initialQuantity = self.closest('.item-box').querySelector('.product-quantity').value;
      element.closest('.item-box').querySelector('.itempicked-quantity').value = initialQuantity;
      element.closest('.item-box').querySelector('.item-totalprice').value = parseFloat(unitPrice) * parseInt(initialQuantity);

      self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.remove('d-none');

    });
  });
}

if (document.getElementById('checkout-form')) {
  document.getElementById('checkout-form').addEventListener('submit', () => {
    document.querySelector('.full-page-loader').classList.add('active');
    document.querySelector('.main-div').classList.add('blured');
  });
}

if (document.querySelector('.fruits')) {
  document.querySelector('.fruits').addEventListener('click', e => {
    e.preventDefault();
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
  if (value < 2) return;
  value--;
  target.value = value;

  if (!btn.closest('.item-box').querySelector('.product-quantity')) return;
  let quantity = btn.closest('.item-box').querySelector('.product-quantity').value;
  btn.closest('.item-box').querySelector('.itempicked-quantity').value = quantity;
  btn.closest('.item-box').querySelector('.item-totalprice').value = parseFloat(itemBox.querySelector('.item-unitprice').value) * parseInt(quantity);
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

  if (!btn.closest('.item-box').querySelector('.product-quantity')) return;
  let quantity = btn.closest('.item-box').querySelector('.product-quantity').value;
  btn.closest('.item-box').querySelector('.itempicked-quantity').value = quantity;
  btn.closest('.item-box').querySelector('.item-totalprice').value = parseFloat(itemBox.querySelector('.item-unitprice').value) * parseInt(quantity);
  calculateItemTotal(value, itemBox);
}

/**
 *
 * @param quantity
 * @param itemBox
 */
function calculateItemTotal(quantity, itemBox) {
  let itemTotalPrice = parseInt(quantity) * parseFloat(itemBox.querySelector('.unit-price-js').textContent);
  itemBox.querySelector('.item-quantity').innerHTML = quantity;
  itemBox.querySelector('.item-total-price-js').innerHTML = itemTotalPrice.toFixed(2);
}

// checkout form validation
document.querySelector('.btn-checkout-form-js').addEventListener('click', (e)=>{
  e.preventDefault();
  card_validation();

  document.querySelectorAll('.field-required').forEach(field=>{

    let warningMessage = document.createElement('p');
    warningMessage.classList.add('text-danger');
    warningMessage.append('The field is required!');

    if(field.getAttribute('data-validation')==='required'){
      if(!field.value.length>0){
        field.classList.add('invalid');
        if(field.closest('.field-group').querySelector('.text-danger')){
          field.closest('.field-group').querySelector('.text-danger').remove();
        }
        field.closest('.field-group').append(warningMessage);
      }else{
        if(field.classList.contains('invalid')){
          field.classList.remove('invalid');
        }

        if(field.closest('.field-group').querySelector('.text-danger')){
          field.closest('.field-group').querySelector('.text-danger').remove();
        }
      }
    }

    //email validation
    if(field.getAttribute('data-validation')==='email'){
      if(!/\S+@\S+\.\S+/.test(field.value)){
        if(field.closest('.field-group').querySelector('.text-danger')){
          field.closest('.field-group').querySelector('.text-danger').remove();
        }
        field.closest('.field-group').append(warningMessage);
      }else{
        if(field.classList.contains('invalid')){
          field.classList.remove('invalid');
        }

        if(field.closest('.field-group').querySelector('.text-danger')){
          field.closest('.field-group').querySelector('.text-danger').remove();
        }
      }
    }

    //cvc validation
    if(field.getAttribute('data-validation')==='cvc'){
      if(!/^\d{3}$/.test(field.value)){
        field.classList.add('invalid');
        if(field.closest('.field-group').querySelector('.text-danger')){
          field.closest('.field-group').querySelector('.text-danger').remove();
        }
        field.closest('.field-group').append(warningMessage);
      }else{
        if(field.classList.contains('invalid')){
          field.classList.remove('invalid');
        }

        if(field.closest('.field-group').querySelector('.text-danger')){
          field.closest('.field-group').querySelector('.text-danger').remove();
        }
      }
    }

  })

  document.querySelectorAll('.select-required').forEach(field=>{
    let warningMessage = document.createElement('p');
    warningMessage.classList.add('text-danger');
    warningMessage.append('The field is required!');
    if(field.value===''){
      if(field.closest('.field-group').querySelector('.text-danger')){
        field.closest('.field-group').querySelector('.text-danger').remove();
      }
      field.closest('.field-group').append(warningMessage);
    }else{
      if(field.classList.contains('invalid')){
        field.classList.remove('invalid');
      }

      if(field.closest('.field-group').querySelector('.text-danger')){
        field.closest('.field-group').querySelector('.text-danger').remove();
      }
    }
  })

  if(document.querySelector('.invalid'))
    document.querySelector('.invalid').focus();

  if(document.querySelector('.invalid')) return;

  document.querySelector('#checkout-form').submit();

})

// cc validation
let J = Payment.J;
let creditCardField = document.querySelector('#card-number');
creditCardField.addEventListener('keyup', (e)=>{
  card_validation();
})

/**
 * validates vard number
 */
function card_validation() {
  let warningMessage = document.createElement('p');
  warningMessage.classList.add('text-danger');
  warningMessage.append('The field is required!');

  let number = document.querySelector('#card-number');
  Payment.formatCardNumber(number);
  J.toggleClass(document.querySelectorAll('input'), 'invalid');
  let cardType = Payment.fns.cardType(J.val(number));
  // J.toggleClass(number, 'invalid', !Payment.fns.validateCardNumber(J.val(number)));
  if (cardType) {
    creditCardField.classList.add(cardType);
  } else {
    console.log('no card selected');
  }
  if (Payment.fns.validateCardNumber(J.val(number))) {
    if(creditCardField.classList.contains('invalid')){
      creditCardField.classList.remove('invalid');
    }
    creditCardField.classList.add('valid');

    if(creditCardField.closest('.field-group').querySelector('.text-danger')){
      creditCardField.closest('.field-group').querySelector('.text-danger').remove();
    }
  } else {
    creditCardField.classList.add('invalid');
    creditCardField.classList.remove('valid');
    if(creditCardField.closest('.field-group').querySelector('.text-danger')){
      creditCardField.closest('.field-group').querySelector('.text-danger').remove();
    }
    creditCardField.closest('.field-group').append(warningMessage);
  }
}
