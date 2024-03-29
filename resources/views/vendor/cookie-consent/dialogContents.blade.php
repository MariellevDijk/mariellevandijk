<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-yellow-100">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-75 flex-1 items-center hidden md:inline">
                    <p class="ml-3 text-yellow-600 cookie-consent__message">
                        {!! trans('general.cookie-consent') !!}
                    </p>
                </div>
                <div class="w-25 mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <a class="red-btn js-cookie-consent-agree cookie-consent__agree flex items-center justify-center px-4 py-2">
                        {{ trans('cookie-consent::texts.agree') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
