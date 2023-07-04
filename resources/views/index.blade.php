@extends('Layouts.user.app', ['title' => 'Beranda'])

@section('content')
    <section id="hero">
    </section>
                <div class="d-flex justify-content-end">
                    {!! $ujian->fragment('merk-ujian')->links('vendor.pagination.bootstrap-4') !!}
                </div>

                <script>
                    const toastTriggers = document.querySelectorAll('.liveToastBtn');
                    const toastLiveExample = document.getElementById('liveToast');
                    const liveToastMerk = document.getElementById('liveToastMerk');
                    const liveToastMerkDetail = document.getElementById('liveToastMerkDetail');
                    const liveToastImg = document.getElementById('liveToastImg');

                    toastTriggers.forEach((toastTrigger) => {
                        toastTrigger.addEventListener('click', () => {
                            const merk = toastTrigger.getAttribute('data-item-merk');
                            const gambar = toastTrigger.getAttribute('data-item-gambar');
                            liveToastMerk.innerText = merk;
                            liveToastMerkDetail.innerText = merk;
                            liveToastImg.setAttribute('src', '/gambarhandphone/' + gambar);
                            const toast = new bootstrap.Toast(toastLiveExample);

                            toast.show();
                        });
                    });
                </script>

            </div>
        </div>
    </section>
@endsection




<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>
