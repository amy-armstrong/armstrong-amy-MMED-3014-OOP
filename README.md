# Pokemon OOP Assignment

### Project Overview
This project demonstrates (OOP) principles in PHP by creating a hierarchy of Pokémon. The system organizes Pokémon into different roles such as offensive, defensive, and support, while sharing common properties and behaviors through inheritance and traits.

The project was built as part of an assignment focused on implementing class hierarchies, traits, autoloading, and proper code documentation.

---

### Technologies Used
- PHP
- MAMP (local server)
- Object-Oriented Programming (OOP)
- GitHub for version control

---

### Project Structure
The project is organized using an `index.php` file and a folder containing all classes.

```
armstrong-amy-MMED-3014-OOP
│
├── index.php
│
└── includes
      └── classes
            ├── Pokemon.php
            ├── OffensivePokemon.php
            ├── DefensivePokemon.php
            ├── SupportPokemon.php
            ├── Gengar.php
            ├── Dragonite.php
            ├── Snorlax.php
            ├── Blissey.php
            └── SpecialMoveTrait.php
```

---

### Class Hierarchy
The project contains three levels of class hierarchy.

```
Pokemon
│
├── OffensivePokemon
│     ├── Gengar
│     └── Dragonite
│
├── DefensivePokemon
│     └── Snorlax
│
└── SupportPokemon
      └── Blissey
```

- **Pokemon** is the parent class containing shared properties and methods.
- **OffensivePokemon, DefensivePokemon, and SupportPokemon** extend the parent class.
- Specific Pokémon classes extend those subclasses.

---

### Properties
Each Pokémon has three properties defined in the parent class:

- `name`
- `type`
- `ability`

These properties describe the Pokémon and are set using a constructor.

---

### Methods
The project includes several methods that describe Pokémon behavior:

- `attack()` – used by offensive Pokémon
- `defend()` – used by defensive Pokémon
- `support()` – used by support Pokémon
- `getInfo()` – returns the Pokémon’s name, type, and ability

Some methods are overridden in subclasses to customize behavior.

---

### Trait
A trait called `SpecialMoveTrait` is used to share functionality between multiple Pokémon classes.

Traits allow reusable behavior across classes without requiring multiple inheritance.

---

### Autoloading
The project uses PHP's built-in `spl_autoload_register()` function to automatically load class files.


### Running the Project
1. Place the project folder inside the `htdocs` directory in MAMP.
2. Start the MAMP servers.
3. Open a browser and go to:


### Author
Amy Armstrong