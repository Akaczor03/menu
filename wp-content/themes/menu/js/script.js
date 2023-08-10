function closeCookieWindow(){
    document.getElementById('cookies').style.display = "none";
}


function openNav() {
    const mobileNav = document.getElementById("mobile__nav__expanded");
    const mobileNavBtn = document.getElementById("mobile__nav__btn");
    const mobileNavBtnX = document.getElementById("mobile__nav__btn__x");

    const mobileCompanyElement = document.getElementById('mobile__company');
    const companySvgElement = document.getElementById('drop__company__arrow');

    const mobileProductElement = document.getElementById('mobile__product');
    const productSvgElement = document.getElementById('drop__product__arrow');

    const mobileResourcesElement = document.getElementById('mobile__resources');
    const resourcesSvgElement = document.getElementById('drop__resources__arrow');

    if (mobileNav && mobileNavBtn && mobileNavBtnX) {
        mobileNav.classList.toggle('active');
        mobileNavBtn.classList.toggle('active');
        mobileNavBtnX.classList.toggle('active');

        mobileNav.classList.toggle('hidden');
        mobileNavBtn.classList.toggle('hidden');
        mobileNavBtnX.classList.toggle('hidden');

        mobileProductElement.classList.remove('active');
        productSvgElement.classList.remove('arrow--right--clicked');
    
        mobileCompanyElement.classList.remove('active');
        companySvgElement.classList.remove('arrow--right--clicked');

        mobileResourcesElement.classList.remove('active');
        resourcesSvgElement.classList.remove('arrow--right--clicked');
    }
}

function mobileProduct() {
    const mobileProductElement = document.getElementById('mobile__product');
    const productSvgElement = document.getElementById('drop__product__arrow');
    
    const mobileCompanyElement = document.getElementById('mobile__company');
    const companySvgElement = document.getElementById('drop__company__arrow');

    const mobileResourcesElement = document.getElementById('mobile__resources');
    const resourcesSvgElement = document.getElementById('drop__resources__arrow');


    if (mobileProductElement &&  productSvgElement) {
        mobileProductElement.classList.toggle('active');
        productSvgElement.classList.toggle('arrow--right--clicked');
        
        mobileCompanyElement.classList.remove('active');
        companySvgElement.classList.remove('arrow--right--clicked');

        mobileResourcesElement.classList.remove('active');
        resourcesSvgElement.classList.remove('arrow--right--clicked');
    }
}

function mobileCompany() {
    const mobileCompanyElement = document.getElementById('mobile__company');
    const companySvgElement = document.getElementById('drop__company__arrow');

    const mobileProductElement = document.getElementById('mobile__product');
    const productSvgElement = document.getElementById('drop__product__arrow');

    const mobileResourcesElement = document.getElementById('mobile__resources');
    const resourcesSvgElement = document.getElementById('drop__resources__arrow');

    if (mobileCompanyElement && companySvgElement) {
        mobileCompanyElement.classList.toggle('active');
        companySvgElement.classList.toggle('arrow--right--clicked');

        mobileProductElement.classList.remove('active');
        productSvgElement.classList.remove('arrow--right--clicked');

        mobileResourcesElement.classList.remove('active');
        resourcesSvgElement.classList.remove('arrow--right--clicked');
    }
}

function mobileResources() {
    const mobileResourcesElement = document.getElementById('mobile__resources');
    const resourcesSvgElement = document.getElementById('drop__resources__arrow');

    const mobileCompanyElement = document.getElementById('mobile__company');
    const companySvgElement = document.getElementById('drop__company__arrow');

    const mobileProductElement = document.getElementById('mobile__product');
    const productSvgElement = document.getElementById('drop__product__arrow');

    if (mobileResourcesElement && resourcesSvgElement) {
        mobileResourcesElement.classList.toggle('active');
        resourcesSvgElement.classList.toggle('arrow--right--clicked');

        mobileProductElement.classList.remove('active');
        productSvgElement.classList.remove('arrow--right--clicked');

        mobileCompanyElement.classList.remove('active');
        companySvgElement.classList.remove('arrow--right--clicked');
    }
}

