<div>
    <div class="section-header tw-rounded-lg tw-text-black tw-shadow-md tw-shadow-gray-300">
        <h4 class="tw-text-lg">Dashboard</h4>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3">
                <div class="card tw-rounded-lg tw-shadow-md tw-shadow-gray-300 tw-text-center">
                    <div class="card-body">
                        <p class="tw-text-black tw-text-3xl">{{ $tersedia }}</p>
                        <p class="tw-mt-4 tw-text-base">Data Barang</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card tw-rounded-lg tw-shadow-md tw-shadow-gray-300 tw-text-center">
                    <div class="card-body">
                        <p class="tw-text-black tw-text-3xl">{{ $stok_sedikit }}</p>
                        <p class="tw-mt-4 tw-text-base">Stok Sedikit</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card tw-rounded-lg tw-shadow-md tw-shadow-gray-300 tw-text-center">
                    <div class="card-body">
                        <p class="tw-text-black tw-text-3xl">{{ $stok_habis }}</p>
                        <p class="tw-mt-4 tw-text-base">Stok Habis</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card tw-rounded-lg tw-shadow-md tw-shadow-gray-300 tw-text-center">
                    <div class="card-body">
                        <p class="tw-text-black tw-text-3xl">{{ $stok_tersedia }}</p>
                        <p class="tw-mt-4 tw-text-base">Stok Tersedia > 5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
