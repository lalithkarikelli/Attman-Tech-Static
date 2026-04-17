document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const description = document.getElementById('description').value;
        
        const subject = 'Website Inquiry';
        const body = `Name: ${name}\nEmail: ${email}\nPhone: ${phone}\nDescription: ${description}`;
        
        const mailtoLink = `mailto:customersupport@attman.in?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        
        window.location.href = mailtoLink;
    });
});