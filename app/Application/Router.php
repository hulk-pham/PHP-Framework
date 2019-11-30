<?php

namespace App\Application;

use App\Interfaces\IRouter;

class Router implements IRouter {

    public function get($path, $handler) {
        if (!$this->checkMethod('get')) return;
        $this->dispatch($path, $handler);
    }

    public function post($path, $handler) {
        if (!$this->checkMethod('post')) return;
        $this->dispatch($path, $handler);
    }

    public function delete($path, $handler) {
        if (!$this->checkMethod('delete')) return;
        $this->dispatch($path, $handler);
    }

    public function put($path, $handler) {
        if (!$this->checkMethod('put')) return;
        $this->dispatch($path, $handler);
    }

    public function patch($path, $handler) {
        if (!$this->checkMethod('patch')) return;
        $this->dispatch($path, $handler);
    }

    public function head($path, $handler) {
        if (!$this->checkMethod('head')) return;
        $this->dispatch($path, $handler);
    }

    public function options($path, $handler) {
        if (!$this->checkMethod('options')) return;
        $this->dispatch($path, $handler);
    }

    public function all($path, $handler) {
        $this->dispatch($path, $handler);
    }


    private function dispatch($path, $handler) {
        if (!$this->checkPath($path)) return;
        $request = new Request();
        $request->addParams($this->matchPattern($path));
        $handler->__invoke($request);
    }

    private function checkMethod($method) {
        return $_SERVER['REQUEST_METHOD'] == strtoupper($method);
    }


    private function checkPath($define_path) {

        if ($define_path === '*') return true;
        $currentPath = $_SERVER['REQUEST_URI'];

        $define_paths = explode("|", $define_path);
        if (count($define_paths) > 1) {
            foreach ($define_paths as $define_path_single) {
                $define_path_single = trim($define_path_single);
                if ($this->realCheck($currentPath, $define_path_single))
                    return true;
            }
            return false;
        } else {

            return $this->realCheck($currentPath, $define_path);
        }

    }

    private function matchPattern($pattern) {
        if (strrpos($pattern, "{", 0)) {
            $needCheck = $_SERVER['REQUEST_URI'];
            $patternName = '/\\' . $pattern . '/';
            $patternValue = '/\\' . $pattern . '/';
            $patternName = preg_replace('/\/{\w+}/', '\/{(\w+)}', $patternName);
            $patternValue = preg_replace('/\/{\w+}/', '\/(\d+)', $patternValue);


            $param_name = [];
            $param_value = [];
            preg_match($patternName, $pattern, $param_name);
            preg_match($patternValue, $needCheck, $param_value);


            $params = array_combine($param_name, $param_value);
            array_shift($params);
            return $params;
        }
        return null;
    }

    private function normalCheck($path, $pattern) {
        if ($path === $pattern) return true;
        return stripos($path, $pattern . '/', 0) === 0
            || stripos($path, $pattern . '?', 0) === 0;
        return false;
    }

    private function patternCheck($path, $pattern) {
        $regex = '/\\' . $pattern . '\?*\/*/';
        $real_regex = preg_replace('/\/{\w+}/', '\/(\w+)', $regex);
        $isMatch = false;
        preg_match($real_regex, $path, $isMatch);
        return $isMatch[0] == $path;
    }

    private function realCheck($path, $pattern) {
        if (strrpos($pattern, "{", 0))
            return $this->patternCheck($path, $pattern);
        return $this->normalCheck($path, $pattern);
    }

}
