
function validateForm() {
        var email = document.getElementById('email').value;
        var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
        alert('Please enter a valid Email address.');

        return false;
        }

}
        

