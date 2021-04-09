import $ from 'jquery'
import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'

class NavigationBurger extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.$menuItem = $('.menu-item')
    this.bindFunctions()
    this.bindEvents()
    this.resolveElements()
  }

  bindFunctions () {
    this.triggerMenu = this.triggerMenu.bind(this)
    this.hideMenu = this.hideMenu.bind(this)
  }

  bindEvents () {
    this.$.on('click', '[data-toggle-menu]', this.triggerMenu)
    this.$menuItem.on('click', this.hideMenu)
  }

  resolveElements () {
    this.$menu = $('.menu', this)
    this.$menuButton = $('.hamburger', this)
    this.$menuItem = $('.menu-item', this)
  }

  connectedCallback () {}

  triggerMenu (e) {
    this.$.toggleClass('flyntComponent-menuIsOpen')
    this.$menuButton.attr('aria-expanded', this.$menuButton.attr('aria-expanded') === 'false' ? 'true' : 'false')
    if (this.$.hasClass('flyntComponent-menuIsOpen')) {
      disableBodyScroll(this.$menu.get(0))
    } else {
      enableBodyScroll(this.$menu.get(0))
    }
  }

  hideMenu (e) {
    console.log('hideMenu')
    this.$.toggleClass('flyntComponent-menuIsOpen')
  }
}

window.customElements.define('flynt-navigation-burger', NavigationBurger, {
  extends: 'nav'
})
