<!-- resources/views/admin/population/create.blade.php -->
@extends('layouts.admin')

@section('title', 'Tambah Data Penduduk - Admin Nagari Silungkang Oso')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-6xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-2 text-sm text-gray-600 mb-2">
                    <a href="{{ route('admin.population.index') }}" class="hover:text-primary-600">Data Penduduk</a>
                    <span>/</span>
                    <span>Tambah Data</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Tambah Data Penduduk</h1>
            </div>

            <!-- Tab Navigation -->
            <div class="mb-8">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8">
                        <button type="button" onclick="showTab('basic')" id="basic-tab"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm tab-button active">
                            Data Dasar
                        </button>
                        <button type="button" onclick="showTab('distribution')" id="distribution-tab"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm tab-button">
                            Distribusi Jenis Kelamin
                        </button>
                        <button type="button" onclick="showTab('age-distribution')" id="age-distribution-tab"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm tab-button">
                            Distribusi Usia
                        </button>
                        <button type="button" onclick="showTab('education')" id="education-tab"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm tab-button">
                            Pendidikan
                        </button>
                        <button type="button" onclick="showTab('occupation')" id="occupation-tab"
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm tab-button">
                            Pekerjaan
                        </button>
                    </nav>
                </div>
            </div>

            <form action="{{ route('admin.population.store') }}" method="POST" id="population-form">
                @csrf

                <!-- Basic Data Tab -->
                <div id="basic-content" class="tab-content">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Data Umum</h3>
                            </div>
                            <div class="card-body space-y-4">
                                <div>
                                    <label for="total_population" class="form-label">Total Penduduk <span
                                            class="text-red-500">*</span></label>
                                    <input type="number" id="total_population" name="total_population"
                                        value="{{ old('total_population') }}" class="form-input w-full" min="0"
                                        required>
                                    @error('total_population')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="total_families" class="form-label">Jumlah Kepala Keluarga <span
                                            class="text-red-500">*</span></label>
                                    <input type="number" id="total_families" name="total_families"
                                        value="{{ old('total_families') }}" class="form-input w-full" min="0"
                                        required>
                                    @error('total_families')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="area" class="form-label">Luas Wilayah (km²)</label>
                                    <input type="number" step="0.01" id="area" name="area"
                                        value="{{ old('area', '15.5') }}" class="form-input w-full" min="0">
                                    @error('area')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="year" class="form-label">Tahun Data <span
                                            class="text-red-500">*</span></label>
                                    <input type="number" id="year" name="year" value="{{ old('year', date('Y')) }}"
                                        class="form-input w-full" min="2000" max="{{ date('Y') + 1 }}" required>
                                    @error('year')
                                        <p class="form-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-semibold text-gray-900">Informasi Tambahan</h3>
                            </div>
                            <div class="card-body space-y-4">
                                <div>
                                    <label for="birth_rate" class="form-label">Angka Kelahiran (per 1000 penduduk)</label>
                                    <input type="number" step="0.01" id="birth_rate" name="birth_rate"
                                        value="{{ old('birth_rate') }}" class="form-input w-full" min="0">
                                </div>

                                <div>
                                    <label for="death_rate" class="form-label">Angka Kematian (per 1000 penduduk)</label>
                                    <input type="number" step="0.01" id="death_rate" name="death_rate"
                                        value="{{ old('death_rate') }}" class="form-input w-full" min="0">
                                </div>

                                <div>
                                    <label for="migration_in" class="form-label">Migrasi Masuk</label>
                                    <input type="number" id="migration_in" name="migration_in"
                                        value="{{ old('migration_in') }}" class="form-input w-full" min="0">
                                </div>

                                <div>
                                    <label for="migration_out" class="form-label">Migrasi Keluar</label>
                                    <input type="number" id="migration_out" name="migration_out"
                                        value="{{ old('migration_out') }}" class="form-input w-full" min="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gender Distribution Tab -->
                <div id="distribution-content" class="tab-content hidden">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-semibold text-gray-900">Distribusi Berdasarkan Jenis Kelamin</h3>
                            <p class="text-sm text-gray-600">Data akan otomatis menghitung persentase</p>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-4">
                                    <div>
                                        <label for="male_population" class="form-label">Laki-laki <span
                                                class="text-red-500">*</span></label>
                                        <input type="number" id="male_population" name="male_population"
                                            value="{{ old('male_population') }}" class="form-input w-full"
                                            min="0" onchange="calculateGenderPercentage()">
                                        @error('male_population')
                                            <p class="form-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="bg-blue-50 p-3 rounded-lg">
                                        <p class="text-sm text-blue-800">Persentase: <span id="male_percentage">0%</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label for="female_population" class="form-label">Perempuan <span
                                                class="text-red-500">*</span></label>
                                        <input type="number" id="female_population" name="female_population"
                                            value="{{ old('female_population') }}" class="form-input w-full"
                                            min="0" onchange="calculateGenderPercentage()">
                                        @error('female_population')
                                            <p class="form-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="bg-pink-50 p-3 rounded-lg">
                                        <p class="text-sm text-pink-800">Persentase: <span
                                                id="female_percentage">0%</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600">
                                    <span class="font-medium">Total:</span> <span id="gender_total">0</span> jiwa
                                </p>
                                <div id="gender_warning" class="text-red-600 text-sm mt-2 hidden">
                                    ⚠️ Total tidak sesuai dengan total penduduk
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Age Distribution Tab -->
                <div id="age-distribution-content" class="tab-content hidden">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-semibold text-gray-900">Distribusi Berdasarkan Kelompok Usia</h3>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="space-y-4">
                                    <div>
                                        <label for="age_0_17" class="form-label">Usia 0-17 Tahun</label>
                                        <input type="number" id="age_0_17" name="age_0_17"
                                            value="{{ old('age_0_17') }}" class="form-input w-full" min="0"
                                            onchange="calculateAgePercentage()">
                                    </div>
                                    <div class="bg-green-50 p-3 rounded-lg">
                                        <p class="text-sm text-green-800">Persentase: <span
                                                id="age_0_17_percentage">0%</span></p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label for="age_18_64" class="form-label">Usia 18-64 Tahun (Produktif)</label>
                                        <input type="number" id="age_18_64" name="age_18_64"
                                            value="{{ old('age_18_64') }}" class="form-input w-full" min="0"
                                            onchange="calculateAgePercentage()">
                                    </div>
                                    <div class="bg-orange-50 p-3 rounded-lg">
                                        <p class="text-sm text-orange-800">Persentase: <span
                                                id="age_18_64_percentage">0%</span></p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label for="age_65_plus" class="form-label">Usia 65+ Tahun</label>
                                        <input type="number" id="age_65_plus" name="age_65_plus"
                                            value="{{ old('age_65_plus') }}" class="form-input w-full" min="0"
                                            onchange="calculateAgePercentage()">
                                    </div>
                                    <div class="bg-purple-50 p-3 rounded-lg">
                                        <p class="text-sm text-purple-800">Persentase: <span
                                                id="age_65_plus_percentage">0%</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600">
                                    <span class="font-medium">Total:</span> <span id="age_total">0</span> jiwa
                                </p>
                                <div id="age_warning" class="text-red-600 text-sm mt-2 hidden">
                                    ⚠️ Total tidak sesuai dengan total penduduk
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education Tab -->
                <div id="education-content" class="tab-content hidden">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-semibold text-gray-900">Tingkat Pendidikan</h3>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div>
                                    <label for="education_no_school" class="form-label">Tidak/Belum Sekolah</label>
                                    <input type="number" id="education_no_school" name="education_no_school"
                                        value="{{ old('education_no_school') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="education_elementary" class="form-label">SD/Sederajat</label>
                                    <input type="number" id="education_elementary" name="education_elementary"
                                        value="{{ old('education_elementary') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="education_junior_high" class="form-label">SMP/Sederajat</label>
                                    <input type="number" id="education_junior_high" name="education_junior_high"
                                        value="{{ old('education_junior_high') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="education_senior_high" class="form-label">SMA/Sederajat</label>
                                    <input type="number" id="education_senior_high" name="education_senior_high"
                                        value="{{ old('education_senior_high') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="education_diploma" class="form-label">Diploma</label>
                                    <input type="number" id="education_diploma" name="education_diploma"
                                        value="{{ old('education_diploma') }}" class="form-input w-full" min="0">
                                </div>

                                <div>
                                    <label for="education_bachelor" class="form-label">Sarjana (S1/S2/S3)</label>
                                    <input type="number" id="education_bachelor" name="education_bachelor"
                                        value="{{ old('education_bachelor') }}" class="form-input w-full"
                                        min="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Occupation Tab -->
                <div id="occupation-content" class="tab-content hidden">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-semibold text-gray-900">Mata Pencaharian</h3>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div>
                                    <label for="occupation_farmer" class="form-label">Petani</label>
                                    <input type="number" id="occupation_farmer" name="occupation_farmer"
                                        value="{{ old('occupation_farmer') }}" class="form-input w-full" min="0">
                                </div>

                                <div>
                                    <label for="occupation_trader" class="form-label">Pedagang</label>
                                    <input type="number" id="occupation_trader" name="occupation_trader"
                                        value="{{ old('occupation_trader') }}" class="form-input w-full" min="0">
                                </div>

                                <div>
                                    <label for="occupation_civil_servant" class="form-label">PNS</label>
                                    <input type="number" id="occupation_civil_servant" name="occupation_civil_servant"
                                        value="{{ old('occupation_civil_servant') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="occupation_private_employee" class="form-label">Karyawan Swasta</label>
                                    <input type="number" id="occupation_private_employee"
                                        name="occupation_private_employee"
                                        value="{{ old('occupation_private_employee') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="occupation_entrepreneur" class="form-label">Wiraswasta</label>
                                    <input type="number" id="occupation_entrepreneur" name="occupation_entrepreneur"
                                        value="{{ old('occupation_entrepreneur') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="occupation_unemployed" class="form-label">Tidak Bekerja</label>
                                    <input type="number" id="occupation_unemployed" name="occupation_unemployed"
                                        value="{{ old('occupation_unemployed') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="occupation_student" class="form-label">Pelajar/Mahasiswa</label>
                                    <input type="number" id="occupation_student" name="occupation_student"
                                        value="{{ old('occupation_student') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="occupation_housewife" class="form-label">Ibu Rumah Tangga</label>
                                    <input type="number" id="occupation_housewife" name="occupation_housewife"
                                        value="{{ old('occupation_housewife') }}" class="form-input w-full"
                                        min="0">
                                </div>

                                <div>
                                    <label for="occupation_others" class="form-label">Lainnya</label>
                                    <input type="number" id="occupation_others" name="occupation_others"
                                        value="{{ old('occupation_others') }}" class="form-input w-full" min="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex justify-between">
                    <a href="{{ route('admin.population.index') }}" class="btn-secondary">
                        Batal
                    </a>
                    <button type="submit" class="btn-primary">
                        Simpan Data Penduduk
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            function showTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active class from all tabs
                document.querySelectorAll('.tab-button').forEach(button => {
                    button.classList.remove('active', 'border-primary-500', 'text-primary-600');
                    button.classList.add('border-transparent', 'text-gray-500');
                });

                // Show selected tab content
                document.getElementById(tabName + '-content').classList.remove('hidden');

                // Add active class to selected tab
                const activeTab = document.getElementById(tabName + '-tab');
                activeTab.classList.add('active', 'border-primary-500', 'text-primary-600');
                activeTab.classList.remove('border-transparent', 'text-gray-500');
            }

            function calculateGenderPercentage() {
                const male = parseInt(document.getElementById('male_population').value) || 0;
                const female = parseInt(document.getElementById('female_population').value) || 0;
                const total = male + female;
                const totalPopulation = parseInt(document.getElementById('total_population').value) || 0;

                document.getElementById('gender_total').textContent = total.toLocaleString();

                if (total > 0) {
                    const malePercent = ((male / total) * 100).toFixed(1);
                    const femalePercent = ((female / total) * 100).toFixed(1);

                    document.getElementById('male_percentage').textContent = malePercent + '%';
                    document.getElementById('female_percentage').textContent = femalePercent + '%';
                } else {
                    document.getElementById('male_percentage').textContent = '0%';
                    document.getElementById('female_percentage').textContent = '0%';
                }

                // Show warning if totals don't match
                const warning = document.getElementById('gender_warning');
                if (totalPopulation > 0 && total !== totalPopulation) {
                    warning.classList.remove('hidden');
                } else {
                    warning.classList.add('hidden');
                }
            }

            function calculateAgePercentage() {
                const age0_17 = parseInt(document.getElementById('age_0_17').value) || 0;
                const age18_64 = parseInt(document.getElementById('age_18_64').value) || 0;
                const age65_plus = parseInt(document.getElementById('age_65_plus').value) || 0;
                const total = age0_17 + age18_64 + age65_plus;
                const totalPopulation = parseInt(document.getElementById('total_population').value) || 0;

                document.getElementById('age_total').textContent = total.toLocaleString();

                if (total > 0) {
                    const age0_17_percent = ((age0_17 / total) * 100).toFixed(1);
                    const age18_64_percent = ((age18_64 / total) * 100).toFixed(1);
                    const age65_plus_percent = ((age65_plus / total) * 100).toFixed(1);

                    document.getElementById('age_0_17_percentage').textContent = age0_17_percent + '%';
                    document.getElementById('age_18_64_percentage').textContent = age18_64_percent + '%';
                    document.getElementById('age_65_plus_percentage').textContent = age65_plus_percent + '%';
                } else {
                    document.getElementById('age_0_17_percentage').textContent = '0%';
                    document.getElementById('age_18_64_percentage').textContent = '0%';
                    document.getElementById('age_65_plus_percentage').textContent = '0%';
                }

                // Show warning if totals don't match
                const warning = document.getElementById('age_warning');
                if (totalPopulation > 0 && total !== totalPopulation) {
                    warning.classList.remove('hidden');
                } else {
                    warning.classList.add('hidden');
                }
            }

            // Auto-calculate when total population changes
            document.getElementById('total_population').addEventListener('change', function() {
                calculateGenderPercentage();
                calculateAgePercentage();
            });
        </script>

        <style>
            .tab-button.active {
                border-color: #3B82F6;
                color: #3B82F6;
            }
        </style>
    @endpush
@endsection
