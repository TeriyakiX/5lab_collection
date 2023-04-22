<?php
namespace Session;

function collectionSession(array $array = []): Session
{
    return new Session($array);
}