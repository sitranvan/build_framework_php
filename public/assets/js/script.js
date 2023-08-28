const logo = document.querySelector('.logo');
logo.addEventListener('click', function () {
    Swal.fire({
        toast: true,
        icon: 'success',
        title: 'Posted successfully',
        position: 'top-right',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
});



