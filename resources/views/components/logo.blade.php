<a 
    href="#"
    class="{{ $class ?? '' }} c-logo">
    <img 
        src="grafical/images/resize-50/logo.webp" 
        srcset="
            grafical/images/resize-75/logo.webp 2x,
            grafical/images/resize-90/logo.webp 3x"
        alt="logo"
        width={{ $width ?? "126"}}
        height= {{ $height ?? "28"}}
        decoding="async"
        class="c-logo__img"
        >
</a>