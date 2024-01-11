<?php

/**
 * Get base path
 * 
 * @param string $path
 * @return string
 * 
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return string
 * 
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/views/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View {$name} not found";
    }
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return string
 * 
 */
function loadPartial($name, $data = [])
{
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        extract($data);
        require $partialPath;
    } else {
        echo "Partial {$name} not found";
    }
}
/**
 * inspect a value
 * 
 * @param mixed value
 * @return void
 * 
 */

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * inspect a value and end script after it
 * 
 * @param mixed value
 * @return void
 * 
 */

function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * format salary
 * 
 * @param string $salary
 * @return string formmated salary
 * 
 */

function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}
