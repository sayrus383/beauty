<?php

namespace App\Orchid\Screens\Post;

use App\Models\Post;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FormScreen extends TranslationsScreen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Новости';

    /**
     * Query data.
     *
     * @param Post $post
     * @return array
     */
    public function query(Post $post): array
    {
        return [
            'post' => $post->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('post.title')
                ->title('Заголовок')
                ->required(),
            Quill::make('post.content')
                ->title('Контент')
                ->required(),
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('post.image')
                    ->targetId()
                    ->title('Фото')
                    ->required(),
                DateTimer::make('post.published_at')
                    ->title('Дата публикации')
                    ->required()
            ])
        ];
    }

    public function save(Post $post, Request $request)
    {
        $post->fill($request->input('post'));
        $post->save();

        if ($request->has('post.image')) {
            $post->attachment()->sync($request->input('post.image'));
        }

        Toast::info('Пост сохранен');

        return redirect()->route('platform.posts.list');
    }
}
