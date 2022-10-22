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
            unitPrice = selectedItemCategory.getAttribute('data-unitprice');

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
        self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.remove('d-none');

    });
});


