<?php

namespace Mub\Blog\Model;

use League\CommonMark\CommonMarkConverter;
use Error;


class Post
{
    private string $file;
    
    public function __construct(string $file)
    {
        $this->file = $file;
    }
    
    public function getContent()
    {
        $converter = new CommonMarkConverter();
        if (file_exists($this->getFileName())) {
            $stream = fopen($this->getFileName(), 'r');
            $content = fread($stream, filesize($this->getFileName()));

            return $converter->convert($content);
        } else {
            $this->getFileNameWithoutDash();
            if (file_exists($this->getFileName())) {
                $stream = fopen($this->getFileName(), 'r');
                $content = fread($stream, filesize($this->getFileName()));

                return $converter->convert($content);
            }
        }

        throw new Error("File does not exist.");
    }

    public function getFileName()
    {
        $dir = UrL::getRootPath();
        $filename = "{$dir}entries\\{$this->file}";

        return $filename;
    }

    public static function getPosts()
    {
        $posts = [];
        $files = scandir(Url::getRootPath() . 'entries');

        foreach ($files as $file) {
            if (strpos($file, '.md') > 0) {
                $post = new post($file);
                array_push($posts, $post);
            }
        }

        return $posts;
    }

    public function getUrl()
    {
        $url = substr($this->file, 0, strpos($this->file, '.md'));
        $title = str_replace(' ', '-', $url);

        return 'http://localhost/Blog-Markdown-PHP/?post=' . $title;
    }

    private function getFileNameWithoutDash()
    {
        $name = str_replace('-', ' ', $this->file);
        $this->file = $name;
        return $name;
    }

    public function getName()
    {
        $title = str_replace('-', ' ', $this->file);
        $title = str_replace('.md', '', $title);
        return $title;
    }
}
