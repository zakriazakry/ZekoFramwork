<?php
class Route {
  private $path;
  private $method;
  private $controller;
  private $middleware = [];

  public function get($path, $controller) {
      $this->path = $path;
      $this->method = 'GET';
      $this->controller = $controller;
      return $this;
  }

  public function post($path, $controller) {
      $this->path = $path;
      $this->method = 'POST';
      $this->controller = $controller;
      return $this;
  }

  public function put($path, $controller) {
      $this->path = $path;
      $this->method = 'PUT';
      $this->controller = $controller;
      return $this;
  }

  public function patch($path, $controller) {
      $this->path = $path;
      $this->method = 'PATCH';
      $this->controller = $controller;
      return $this;
  }

  public function delete($path, $controller) {
      $this->path = $path;
      $this->method = 'DELETE';
      $this->controller = $controller;
      return $this;
  }

  public function middleware($middleware) {
      $this->middleware[] = $middleware;
      return $this;
  }

  public function getPath() {
      return $this->path;
  }

  public function getMethod() {
      return $this->method;
  }

  public function getController() {
      return $this->controller;
  }

  public function getMiddleware() {
      return $this->middleware;
  }
  public function handle()
  {
    return "assa";
      $controller = explode('@', $this->getController());
      $controllerClass = $controller[0];
      $controllerMethod = $controller[1];

      $controllerInstance = new $controllerClass();
      return $controllerInstance->$controllerMethod();
  }
}