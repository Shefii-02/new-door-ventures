@extends('admin.layouts.master')

@section('content')
    <div>
        <!-- ===== Consults List Start ===== -->
        <div class="col-span-12">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="p-4 md:p-6 xl:p-7.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-title-sm2 font-bold text-black dark:text-white">
                            Consults List
                        </h2>
                    </div>
                </div>

                <div class="border-b border-stroke px-4 pb-2 dark:border-strokedark md:px-6 xl:px-7.5">
                    <div class="flex justify-between items-center gap-x-6">
                        <div class="w-2/12 text-left"><span class="font-medium">Name</span></div>
                        <div class="w-2/12 text-left"><span class="font-medium">Contact</span></div>
                        <div class="w-2/12 text-center"><span class="font-medium">Owner</span></div>
                        <div class="w-2/12 text-left"><span class="font-medium">Enquiry For</span></div>
                        <div class="w-2/12 text-center"><span class="font-medium">Status</span></div>
                        <div class="w-2/12 text-center"><span class="font-medium">Actions</span></div>
                    </div>
                </div>

                <div class="p-4 md:p-6 xl:p-7.5">
                    <div class="flex flex-col gap-y-4">
                        @foreach ($consults as $consult)
                            <div class="flex justify-between items-center gap-x-6">
                                <div class="w-2/12 text-left">
                                    <span class="font-medium">{{ $consult->name }}</span>
                                </div>
                                <div class="w-2/12 text-left">
                                    <span class="font-medium">{{ $consult->email }}</span><br>
                                    <span class="font-medium">{{ $consult->phone }}</span>
                                </div>
                                <div class="w-2/12 text-center">
                                    <span class="font-medium">{{ $consult->owner ?? '--' }}</span>
                                </div>
                                <div class="w-2/12 text-left">
                                    <span
                                        class="font-medium px-2.5 py-0.5 text-sm font-medium text-white bg-dark inline-block text-capitalize rounded">
                                        {{ $consult->property ? 'Property' : 'Project' }}
                                    </span>
                                </div>
                                <div class="w-2/12 text-center">
                                    <span
                                        class="inline-block text-capitalize rounded px-2.5 py-0.5 text-sm font-medium text-white {{ $consult->status === 'unread' ? 'bg-red' : 'bg-success' }}">
                                        {{ $consult->status }}
                                    </span>
                                </div>
                                <div class="w-2/12 text-center">
                                    <div class="flex justify-center">
                                        <button data-id="{{ $consult->id }}"
                                            class="open-consult-modal block hover:text-meta-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="consult-modal" class="hidden fixed inset-0 z-50 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded shadow-lg w-1/2">
                <div id="consult-modal-content"></div>
            </div>
        </div>
        <!-- ===== Consults List End ===== -->
    </div>
@endsection

@push('footer')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('consult-modal');
            const modalContent = document.getElementById('consult-modal-content');

            document.querySelectorAll('.open-consult-modal').forEach(button => {
                button.addEventListener('click', async (e) => {
                    const consultId = e.target.closest('button').getAttribute('data-id');

                    // Fetch the consult details
                    const response = await fetch(`/admin/consults/${consultId}`);
                    const html = await response.text();

                    modalContent.innerHTML = html;
                    modal.classList.remove('hidden');
                });
            });

            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modalContent.innerHTML = '';
                }
            });
        });
    </script>
@endpush
