<?php
    declare(strict_types=1);

    function e(mixed $value): string{
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
    function format_price(int $cents): string{
        return '$' . number_format($cents / 100, 2, '.', ',') . ' MXN';
    }
    function categories(): array{
        return ['Libros', 'Tecnologia', 'Accesorios', 'Hogar', 'Otros'];
    }
    function emoji_for(string $category): string{
        return match ($category){
            'Libros' => '📚', 'Tecnologia' => '💻', 'Accesorios' => '🎧',
            'Hogar' => '🏠', 'Otros' => '♻️', default => '📦',
        };
    }
?>