function isMobileDevice() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    return /android|iphone|ipad|ipod|blackberry|windows phone/i.test(userAgent) &&
        !/windows NT|macintosh|linux x86_64|x11/i.test(userAgent);
}

function checkScreenWidth() {
    const mobileBreakpoint = 768;
    if (window.innerWidth <= mobileBreakpoint) {
        return true;
    } 
}

function checkIfMobile() {
    if (isMobileDevice() || checkScreenWidth()) {
        document.body.style.overflow = 'hidden';
        document.body.style.margin = "0"; 
        document.body.innerHTML = `
            <div id="mobile-blocker">
                <div class="mobile-message">
                    <p>Only available on desktop</p>
                </div>
            </div>
            <style>
                /* Mobile Blocker Styling */
                #mobile-blocker {
                    display: flex;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.8); 
                    color: white;
                    z-index: 10000;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .mobile-message {
                    font-size: 1.5rem;
                    text-align: center;
                    background-color: #333;
                    padding: 10%;
                    border-radius: 10px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                }
                </style>`;
    } else {
        document.body.style.overflow = '';
    }
}

checkIfMobile();
window.addEventListener('resize', checkIfMobile);