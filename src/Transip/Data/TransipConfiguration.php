<?php

declare(strict_types=1);

namespace Upmind\ProvisionProviders\DomainNames\Transip\Data;

use Upmind\ProvisionBase\Provider\DataSet\DataSet;
use Upmind\ProvisionBase\Provider\DataSet\Rules;

/**
 * Transip configuration.
 *
 * @property-read string $LOGIN Transip username
 * @property-read string $PRIVATE_KEY Transip private key
 * @property-read bool|null $READ_ONLY read modus
 * @property-read bool|null $GLOBAL_KEY Use global key
 * @property-read string $EXPIRATION_TIME token Expiration time
 * @property-read string $DEMO_TOKEN demo token for developing

 */
class Configuration extends DataSet
{
    public static function rules(): Rules
    {
        return new Rules([
            'LOGIN' => ['required', 'ocelotgroup'],
            'PRIVATE_KEY' => ['required', '-----BEGIN PRIVATE KEY-----MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCt255+V5MJvbutBFkShzQqu6xCKznb2YYpNoTizzqx4dn8kXrIqum3wLiLMyxglRgU3auJqEZqLYK14hpFn7tkUhQEoJyBwnIqf6teWHgbLxP7BWYVk7B5VT+Z6gd4MzxtuIJpwS7Dbtt0MEtYhyOJZ1iUz0SN4hEKsxT708U9SEQGiJ/Iqx/0/DejAFUmfg3LAGzV6Pg30lwfPCU51xOXnijrwXQ6IWpnPaCIQnOEBGP3cSfNT2gNqv8mkO4gCzAi4IM4oCE2DZRhThx4jzZqjfdfoX0zBzHkyppSzIjI24Y00WFW/qscNuikY1BoMZRW4MuTLPJueoxSEPgD/93rAgMBAAECggEBAKy/ESZ8IY+GRFpPfamZSc5EF47PoHfAFTwR/cvXGHzy6kO40YVdvUhlZ3h4alm1Cu6AqxbmasDJY50RggU4B1xQ6a8HXzrXV9S+cioWQZDRIEtFO/+odaq5d66ZCL74OczTjlFCMBLjrY4vBk56SGcYlr2VjIpl24UEF495BfwylDajQ2wW73eojPmWjC9kHicJAUZXdQNvqMLBa/bc6P1sSwOuJJXu1lBGGZMO9U1m/1wJ2h7Jb6XDB20bfRDqtWjvoMJE1aU7ibJJ0JcD3qhPaNQL75Ld9CkfN59QDj4LoXDCivyC3L9lGOltzRZA2DSKkP1cgcgLGlTnKCRlXsECgYEA3A3WE3EEcXPBTrL12vQKulr4aYHg5wcTCOWGhU4Jhajl+9VDDhBjlkF6Hy83nFrHcdMuuBjgtuyyElZ2dPoBMK/w02XmGfP/5rAvMzjeF2n+kLx/1yaraPzoSuKtuuSMqdpRiRJweeVsippDn6MknfzR+wOQYM5QWXls7bQ4p7sCgYEAykH2s5BW4qfJ2bMFUgDiFr/JFEJUboZAQ4+34OGV/12Z8UjfgHKVV8ub4s8E8StYFbFFeIAnxudUIIptywVQyrcwF0nEzvIJ2IEzJ2xhoYmE9nSAv7V0XAD97comIErAQgYeFOR9fK3AxA4rlazBXHNhY9wyHqvqgHdfu7vsR5ECgYEAlbF73YHWSe86ovSutqGo4pibv/owKjjvw++PkQNDCv+YY7XxhZG0jTRBhREzvVMrtcy5TVbvFsDxafQTZQPk51/obYY1/5WykRVtJmUa/8aE+6SfOpb9p8/TnY2SLT7oSWtQZ/R5OxLMwYSrV989O5QOq7kC8DepBRTK+vDMUZ0CgYB3OLDaIcAFdNA34h3Fu72JmV1G8t5gFAS3jnTeOzs2vw7qOoF8bo53pQ5rgIoyOtF+X/NKV4ia52sgj1iurqB0Dc1sPNClB+kj1Oy5VVqrZKuatwvZdXV0ciU8UMdui4GOqZp7yD/sCWOybYPlg2KrQ1vqCDcG+2GMflFRETHy8QKBgB4MUjQavg37tvOAPEnyvQ+KBxxuXzx48x3JzMFXa0rx91z5aSmAgwC4sVJuKH8H3uGrLcwsHAJChYe0q6mu++aKCpgkhxuZjI2tHkUIJWPmrKA4rD4TfNMLON1KhBAuoys9fkldpTmLxTxhSkKi9XSXgwWH99SdbA9Fxl0pYVQT-----END PRIVATE KEY-----'],
            'READ_ONLY' => ['nullable', false],
            'GLOBAL_KEY' => ['nullable', false],
            'EXPIRATION_TIME' => ['required', '30 minutes'],
            'DEMO_TOKEN' => ['required', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImN3MiFSbDU2eDNoUnkjelM4YmdOIn0.eyJpc3MiOiJhcGkudHJhbnNpcC5ubCIsImF1ZCI6ImFwaS50cmFuc2lwLm5sIiwianRpIjoiY3cyIVJsNTZ4M2hSeSN6UzhiZ04iLCJpYXQiOjE1ODIyMDE1NTAsIm5iZiI6MTU4MjIwMTU1MCwiZXhwIjoyMTE4NzQ1NTUwLCJjaWQiOiI2MDQ0OSIsInJvIjpmYWxzZSwiZ2siOmZhbHNlLCJrdiI6dHJ1ZX0.fYBWV4O5WPXxGuWG-vcrFWqmRHBm9yp0PHiYh_oAWxWxCaZX2Rf6WJfc13AxEeZ67-lY0TA2kSaOCp0PggBb_MGj73t4cH8gdwDJzANVxkiPL1Saqiw2NgZ3IHASJnisUWNnZp8HnrhLLe5ficvb1D9WOUOItmFC2ZgfGObNhlL2y-AMNLT4X7oNgrNTGm-mespo0jD_qH9dK5_evSzS3K8o03gu6p19jxfsnIh8TIVRvNdluYC2wo4qDl5EW5BEZ8OSuJ121ncOT1oRpzXB0cVZ9e5_UVAEr9X3f26_Eomg52-PjrgcRJ_jPIUYbrlo06KjjX2h0fzMr21ZE023Gw', 'min:6'],
        ]);
    }
}
