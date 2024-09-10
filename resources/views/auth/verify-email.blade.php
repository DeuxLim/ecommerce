<x-layout>
    <div class="container mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Verify Your Email Address</h2>
            <p class="mb-4">Before proceeding, please check your email for a verification link.</p>
            <p>If you did not receive the email,</p>

            <form method="POST" action="{{ route('verification.send') }}" class="mt-4">
                @csrf
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Resend Verification Email
                </button>
            </form>
        </div>
    </div>
</x-layout>
