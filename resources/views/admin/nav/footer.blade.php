<footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
                &copy; {{ now()->year }}
                <a href="{{ env('APP_URL') }}" class="font-weight-bold ml-1"
                    target="_blank">{{ config('app.name') }}</a>
            </div>
        </div>
    </div>
</footer>
