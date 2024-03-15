<script>
    const button = document.querySelector('.button_add');
    const submit = document.querySelector('.submit');

    function toggleClass() {
    this.classList.toggle('active_add');
}

    function addClass() {
    this.classList.add('finished');
}

    button.addEventListener('click', toggleClass);
    button.addEventListener('transitionend', toggleClass);
    button.addEventListener('transitionend', addClass);
</script>