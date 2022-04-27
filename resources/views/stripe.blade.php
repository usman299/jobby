<html>
<head>

</head>
<body>
<form class="my-form" action="{{route('stripe.post')}}" method="post">
    @csrf
    <input type="hidden" name="token_account" id="token-account">
    <input type="hidden" name="token_person" id="token-person">
    <label>
        <span>Business Name</span>
        <input class="inp-company-name">
    </label>
    <fieldset>
        <legend>Business Address</legend>
        <label>
            <span>Street Address Line 1</span>
            <input class="inp-company-street-address1">
        </label>
        <label>
            <span>City</span>
            <input class="inp-company-city">
        </label>
        <label>
            <span>State</span>
            <input class="inp-company-state">
        </label>
        <label>
            <span>Postal Code</span>
            <input class="inp-company-zip">
        </label>
    </fieldset>
    <label>
        <span>Representative First Name</span>
        <input class="inp-person-first-name">
    </label>
    <label>
        <span>Representative Last Name</span>
        <input class="inp-person-last-name">
    </label>
    <fieldset>
        <legend>Representative Address</legend>
        <label>
            <span>Street Address Line 1</span>
            <input class="inp-person-street-address1">
        </label>
        <label>
            <span>City</span>
            <input class="inp-person-city">
        </label>
        <label>
            <span>State</span>
            <input class="inp-person-state">
        </label>
        <label>
            <span>Postal Code</span>
            <input class="inp-person-zip">
        </label>
    </fieldset>
    <button>Submit</button>
    <p>By clicking, you agree to <a href="#">our terms</a> and the <a href="/connect-account/legal">Stripe Connected Account Agreement</a>.</p>
</form>
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Assumes you've already included Stripe.js!
    const stripe = Stripe('pk_test_51Ia9JLGGZGzjCRwlKr61P3oiLKAy4MtSVO3KLrCK77jXp0liVp8jls3PRpgpqYqfBh6XpBdVtupd6XLNISTrCb9k00IYYaIYAW');
    const myForm = document.querySelector('.my-form');
    myForm.addEventListener('submit', handleForm);

    async function handleForm(event) {
        event.preventDefault();

        const accountResult = await stripe.createToken('account', {
            business_type: 'company',
            company: {
                name: document.querySelector('.inp-company-name').value,
                address: {
                    line1: document.querySelector('.inp-company-street-address1').value,
                    city: document.querySelector('.inp-company-city').value,
                    state: document.querySelector('.inp-company-state').value,
                    postal_code: document.querySelector('.inp-company-zip').value,
                },
            },
            tos_shown_and_accepted: true,
        });

        const personResult = await stripe.createToken('person', {
            person: {
                first_name: document.querySelector('.inp-person-first-name').value,
                last_name: document.querySelector('.inp-person-last-name').value,
                address: {
                    line1: document.querySelector('.inp-person-street-address1').value,
                    city: document.querySelector('.inp-person-city').value,
                    state: document.querySelector('.inp-person-state').value,
                    postal_code: document.querySelector('.inp-person-zip').value,
                },
            },
        });

        if (accountResult.token && personResult.token) {
            document.querySelector('#token-account').value = accountResult.token.id;
            document.querySelector('#token-person').value = personResult.token.id;
            myForm.submit();
        }
    }
</script>
</body>
</html>
