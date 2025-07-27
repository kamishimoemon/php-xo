# ❌⭕ php-xo

**php-xo** is a minimalist yet powerful Tic-Tac-Toe engine written in PHP — built with interfaces, ports, and fire.

This project is part of a larger exploration: implementing the same core engine across multiple languages while staying faithful to pure Object-Oriented design principles.

## 🔥 Vision

* No getters.
* Minimal conditionals.
* Purely interface-driven.
* Hexagonal architecture (Ports & Adapters).
* Focused on expressiveness over cleverness.

## 🎮 Game Modes

* **Classic** — The traditional 3x3 tic-tac-toe.
* **Deathmatch** — A twist on the classic rules (coming soon).

Each mode lives in its own branch:

| Mode       | Branch       | How to Play                                                          |
| ---------- | ------------ | -------------------------------------------------------------------- |
| Classic    | `classic`    | [README](https://github.com/kamishimoemon/php-xo/tree/classic#readme)    |
| Deathmatch | `deathmatch` | [README](https://github.com/kamishimoemon/php-xo/tree/deathmatch#readme) |

> Run the engine from the console, or directly from the README using GitHub Actions.

## ⚙️ Architecture

php-xo follows a strict hexagonal architecture:

* **Core**: Rules, decisions, domain logic.
* **Ports**: Interfaces for players, I/O, boards.
* **Adapters**: Console UI, GitHub Actions, and more.

Each mode is fully decoupled and lives in isolation.

## 💪 Tech Requirements

* PHP 8.4+
* Composer
* No frameworks

## 💡 Inspiration

This engine was designed as part of a talk on *Object Thinking* and clean design in PHP.
It aims to showcase what true object-oriented code looks like — simple, testable, and alive.

## 🤝 Contributing

Each mode invites pull requests via its own branch.
See [CONTRIBUTING.md](CONTRIBUTING.md) for details.

---

📜 **Code as ritual.** 🔥 **Fire as method.**
